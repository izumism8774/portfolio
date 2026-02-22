import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/list.css',
                'resources/css/post.css',
                'resources/css/show.css',
                'resources/css/chat.css',
                'resources/js/app.js',
                'resources/js/portfolio/post.js',
                'resources/js/portfolio/list.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
