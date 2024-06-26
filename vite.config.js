import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
              // 'resources/js/jquery-3.7.1.min.js',
                'resources/css/bootstrap.min.css',
                'resources/css/datatables.min.css',
                'resources/css/select2.min.css',
                'resources/sass/app.scss',

                'resources/js/bootstrap.bundle.min.js',
                'resources/js/datatables.min.js',
                'resources/js/select2.full.min.js',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
