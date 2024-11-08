import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/main.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
