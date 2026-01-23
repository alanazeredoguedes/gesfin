import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import vue from '@vitejs/plugin-vue'
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // 'resources/css/admin.css',
                // 'resources/css/client.css',
                // 'resources/css/public.css',
                'resources/admin/js/admin.ts',
                'resources/client/js/client.ts',
                'resources/public/js/public.ts',
            ],
            refresh: true,
        }),
        tailwindcss(),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                }
            }
        }),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
    resolve: {
        alias: {
            'ziggy-js': '/vendor/tightenco/ziggy',
            '@admin': path.resolve(__dirname, 'resources/admin/js'),
            '@client': path.resolve(__dirname, 'resources/client/js'),
            '@public': path.resolve(__dirname, 'resources/public/js'),
        },
    },
});
