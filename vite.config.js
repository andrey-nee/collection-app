import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/bootstrap.min.css',
                'resources/sass/app.scss',
                'resources/js/bootstrap.bundle.min.js',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
