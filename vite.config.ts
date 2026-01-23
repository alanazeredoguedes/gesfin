import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // 'resources/css/admin.css',
                // 'resources/css/client.css',
                // 'resources/css/public.css',
                'resources/js/admin.ts',
                'resources/js/client.ts',
                'resources/js/public.ts',
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
        },
    },
});
