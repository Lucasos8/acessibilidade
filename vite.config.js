import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/live-chat.css',
                'resources/css/login.css',
                'resources/css/request-type.css',
                'resources/css/salasAbertas.css',
                
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
