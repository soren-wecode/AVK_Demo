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
                sans: ['Neue Helvetica W02', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                xs: '0.6rem',
            },
            colors: {
                'avk-blue': '#0F2395',
                'ghost-white': '#F2F3F9',
                'grey': '#F7F7F7',
            },
            height: {
                '15': '60px',
            },
            spacing: {
                '15': '60px',
            }
        },
    },

    plugins: [forms, typography],
};
