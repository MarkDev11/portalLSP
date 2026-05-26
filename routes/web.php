<?php

use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\LandingPageController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TentangKamiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang-kami', function () {
    $landingPage = \App\Models\LandingPage::first();
    $tentangKami = \App\Models\TentangKami::first();
    return view('tentang-kami', compact('landingPage', 'tentangKami'));
})->name('tentang-kami');

Route::get('/skema', function () {
    return view('skema');
})->name('skema');

Route::get('/berita', [NewsController::class, 'publicIndex'])->name('berita');

Route::get('/berita/{slug}', [NewsController::class, 'publicShow'])->name('berita.detail');

Route::get('/kontak', function () {
    $kontak = \App\Models\Kontak::first();
    $landingPage = \App\Models\LandingPage::first();
    return view('kontak', compact('kontak', 'landingPage'));
})->name('kontak');

Route::post('/kontak', [ContactMessageController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('kontak.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('admin.dashboard');

// Editor Routes
Route::middleware(['auth', 'editor'])->prefix('editor')->name('editor.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Editor\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('news', \App\Http\Controllers\Editor\NewsController::class)->except(['show']);
});

Route::get('/admin/landingpage', [LandingPageController::class, 'edit'])
    ->middleware(['auth', 'admin'])
    ->name('admin.landingpage.edit');

Route::put('/admin/landingpage', [LandingPageController::class, 'update'])
    ->middleware(['auth', 'admin'])
    ->name('admin.landingpage.update');

Route::resource('admin/carousel', CarouselController::class)
    ->middleware(['auth', 'admin'])
    ->names('admin.carousel')
    ->except(['show']);

Route::post('/admin/carousel/reorder', [CarouselController::class, 'reorder'])
    ->middleware(['auth', 'admin'])
    ->name('admin.carousel.reorder');

Route::resource('admin/news', NewsController::class)
    ->middleware(['auth', 'admin'])
    ->names('admin.news')
    ->except(['show']);

Route::get('/admin/tentang-kami', [TentangKamiController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('admin.tentang-kami.index');

Route::put('/admin/tentang-kami', [TentangKamiController::class, 'update'])
    ->middleware(['auth', 'admin'])
    ->name('admin.tentang-kami.update');

Route::get('/admin/kontak', [KontakController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('admin.kontak.index');

Route::put('/admin/kontak', [KontakController::class, 'update'])
    ->middleware(['auth', 'admin'])
    ->name('admin.kontak.update');

Route::post('/admin/kontak/messages/{id}/read', [KontakController::class, 'markAsRead'])
    ->middleware(['auth', 'admin'])
    ->name('admin.kontak.messages.read');

Route::delete('/admin/kontak/messages/{id}', [KontakController::class, 'deleteMessage'])
    ->middleware(['auth', 'admin'])
    ->name('admin.kontak.messages.delete');

Route::resource('admin/users', UserController::class)
    ->middleware(['auth', 'admin'])
    ->names('admin.users')
    ->except(['show']);

Route::post('/admin/users/bulk-delete', [UserController::class, 'bulkDelete'])
    ->middleware(['auth', 'admin'])
    ->name('admin.users.bulk-delete');

Route::get('/admin/settings', [SettingController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('admin.settings.index');

Route::put('/admin/settings', [SettingController::class, 'update'])
    ->middleware(['auth', 'admin'])
    ->name('admin.settings.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
