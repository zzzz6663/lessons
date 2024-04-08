import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/admin.css', 'resources/js/admin.js','resources/css/site.css', 'resources/js/site.js'],
            refresh: true,
        }),
    ],
});
