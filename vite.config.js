import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/js/Components',
            '@Shared': '/resources/js/Components/Shared',
            '@Inputs': '/resources/js/Components/Shared/Inputs',
            '@Icons': '/resources/js/Components/Shared/Icons',
        },
    },
});
