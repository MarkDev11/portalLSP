import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                ink: {
                    50: '#f8fafc',
                    100: '#f1f5f9',
                    200: '#e2e8f0',
                    300: '#cbd5e1',
                    400: '#94a3b8',
                    500: '#64748b',
                    600: '#475569',
                    700: '#334155',
                    800: '#1e293b',
                    900: '#0f172a',
                },
                accent: {
                    50: '#eff6ff',
                    100: '#dbeafe',
                    200: '#bfdbfe',
                    300: '#93c5fd',
                    400: '#60a5fa',
                    500: '#3b82f6',
                    600: '#2563eb',
                    700: '#1d4ed8',
                    800: '#1e40af',
                    900: '#1e3a8a',
                },
            },
            typography: ({ theme }) => ({
                DEFAULT: {
                    css: {
                        '--tw-prose-body': theme('colors.ink.700'),
                        '--tw-prose-headings': theme('colors.ink.900'),
                        '--tw-prose-links': 'var(--color-accent, #2563eb)',
                        '--tw-prose-bold': theme('colors.ink.900'),
                        '--tw-prose-quotes': theme('colors.ink.600'),
                        '--tw-prose-quote-borders': 'var(--color-accent, #2563eb)',
                        '--tw-prose-code': theme('colors.ink.900'),
                        '--tw-prose-pre-bg': theme('colors.ink.900'),
                        '--tw-prose-pre-code': theme('colors.ink.50'),
                        '--tw-prose-th-borders': theme('colors.ink.200'),
                        '--tw-prose-td-borders': theme('colors.ink.200'),
                        '--tw-prose-hr': theme('colors.ink.200'),
                        maxWidth: 'none',
                        a: {
                            textDecoration: 'underline',
                            fontWeight: '500',
                            '&:hover': { opacity: '0.8' },
                        },
                        code: {
                            backgroundColor: theme('colors.ink.100'),
                            padding: '0.125rem 0.375rem',
                            borderRadius: '0.25rem',
                            fontWeight: '500',
                        },
                        'code::before': { content: 'none' },
                        'code::after': { content: 'none' },
                    },
                },
            }),
        },
    },

    plugins: [forms, typography],
};
