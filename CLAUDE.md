# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Portal LSP UBSI — a Laravel 12 web portal for Lembaga Sertifikasi Profesi (LSP) at UBSI. Public-facing pages (landing, tentang-kami, skema, berita, kontak) plus role-gated admin and editor dashboards for managing landing page content, carousel, news, "tentang kami", contact settings/messages, users, and global settings.

Stack: PHP 8.3, Laravel 12, Blade + Tailwind 3, Alpine.js, Vite 8, TinyMCE 8 (rich text), Intervention Image (image processing), SQLite (default DB), Laravel Breeze (auth scaffolding).

## Common Commands

PowerShell is the default shell on this machine. Use `php artisan ...` directly.

```powershell
# Full first-time setup (install deps, copy .env, key:generate, migrate, npm install + build)
composer setup

# Dev: runs server + queue + pail logs + vite together via concurrently
composer dev

# Frontend only
npm run dev          # vite dev server with HMR
npm run build        # production build

# Database
php artisan migrate
php artisan migrate:fresh --seed   # wipe + reseed (uses database/database.sqlite by default)
php artisan db:seed --class=AdminUserSeeder

# Tests (clears config first, then runs PHPUnit via artisan test)
composer test
php artisan test --filter=SomeTestName    # single test
php artisan test tests/Feature/Auth/LoginTest.php

# Code style
./vendor/bin/pint                  # format
./vendor/bin/pint --test           # check only
```

The `.env` defaults to `DB_CONNECTION=sqlite` against `database/database.sqlite`. `SESSION_DRIVER`, `QUEUE_CONNECTION`, and `CACHE_STORE` all default to `database`, so `migrate` must run before sessions/queue/cache work.

## Architecture

### Role-based routing (the central pattern)

Three audiences are served from one app, separated by middleware in `routes/web.php`:

- **Public** — unauthenticated, lives at the root (`/`, `/tentang-kami`, `/skema`, `/berita`, `/berita/{slug}`, `/kontak`). Reads first-row singletons from `LandingPage`, `TentangKami`, `Kontak` models and renders public Blade views.
- **Admin** (`/admin/*`) — gated by `auth` + `admin` middleware alias. Full CRUD over `LandingPage`, `Carousel`, `News`, `TentangKami`, `Kontak` (including ContactMessages), `Users`, `Settings`. Controllers live under `app/Http/Controllers/Admin/`.
- **Editor** (`/editor/*`) — gated by `auth` + `editor`. Limited to news management. Controllers under `app/Http/Controllers/Editor/`.

The `admin` and `editor` middleware are simple role gates (`AdminMiddleware`, `EditorMiddleware`) registered in `bootstrap/app.php`. Both check `auth()->user()->role` against the enum on the `users` table (`admin` | `editor`, default `editor`). There is no shared "staff" role — admins cannot access `/editor/*` and vice versa, because each middleware checks for an exact role match.

Auth is Laravel Breeze, but registration and password-reset routes are intentionally commented out in `routes/auth.php` — only login/logout are active. New users are created by an admin via `/admin/users` or by `AdminUserSeeder`.

### Singleton content models

Most "content" models hold exactly one row that backs the public site:

- `LandingPage` — hero, sections, "tentang" preview on the homepage
- `TentangKami` — full About page content
- `Kontak` — contact info shown on the public Kontak page
- `Setting` — site-wide settings + footer fields

Public routes call `Model::first()` and pass to the view. Admin "edit" pages operate on that same first row. When adding new singleton-style content, follow this pattern (no separate "create" route, just `edit`/`update`).

`CarouselSlide` and `News` are the multi-row exceptions (resourceful CRUD).

### Analytics middleware

`TrackPageView` is appended to the `web` middleware group in `bootstrap/app.php`, so every public request increments `page_views` (and `unique_visitors` per session per day) on the `website_analytics` table via `WebsiteAnalytics::incrementToday()`. Individual news views are incremented in `News::incrementViews()` when a slug is rendered. The admin dashboard reads from this table.

### Frontend build

Vite entry points are `resources/css/app.css` and `resources/js/app.js` (see `vite.config.js`). Tailwind 3 + `@tailwindcss/forms`, Alpine.js, and TinyMCE are bundled there. Admin/editor layouts (`resources/views/layouts/admin.blade.php`, `editor.blade.php`) and the public layout (`public.blade.php`) all pull in the same Vite manifest via `@vite(['resources/css/app.css', 'resources/js/app.js'])`. TinyMCE is used for rich-text fields on news/landing-page/tentang-kami admin forms.

### Storage and uploads

Images (carousel, news thumbnails, hero, tentang) go through `Intervention\Image` and are stored on the `public` disk. Run `php artisan storage:link` once after setup so `storage/app/public` is reachable via `/storage/...`.

## Conventions

- Indonesian naming is used throughout for domain models and routes (`tentang-kami`, `kontak`, `berita`, `LandingPage`, `Kontak`, `TentangKami`). Keep new domain names in Indonesian to match.
- Public routes use Indonesian slugs; admin/editor routes are namespaced under `/admin` and `/editor` and named `admin.*` / `editor.*`.
- View structure mirrors the role split: `resources/views/admin/*`, `resources/views/editor/*`, plus top-level public views (`tentang-kami.blade.php`, `kontak.blade.php`, etc.).
- Migrations after `2026_05_20` are the project's own; the three `0001_01_01_*` migrations are the Laravel default users/cache/jobs tables and should not be edited.
