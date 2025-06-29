import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/themes/newgeneration.css',
                'resources/css/themes/classic.css',
                'resources/css/themes/catppiccinlatte.css',
                'resources/css/themes/oshawatt.css',
                'resources/css/themes/base2tonedesert.css',
                'resources/css/themes/pastelbonanza.css'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '$': 'jQuery'
        },
    },
});
