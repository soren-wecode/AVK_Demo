import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['"Neue Helvetica W02", helvetica, arial, sans-serif'],
            },
            fontSize: {
                xs: '0.6rem',
            },
            colors: {
                'avk-blue': '#0F2395',
                'avk-blue-dark': '#081148',
                'ghost-white': '#F2F3F9',
                'grey': '#F7F7F7',
            },
            height: {
                '15': '60px',
            },
            spacing: {
                '15': '60px',
            },
            boxShadow: {
                'dark-blur-1': '0 0 2px 1px rgba(15, 35, 149, 0.5)',
                'dark-blur-2': '0 0 2px 2px rgba(15, 35, 149, 0.3)',
            },
        },
    },

    plugins: [forms, typography],
};
