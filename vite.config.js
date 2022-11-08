import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel([
            'resources/js/app.js',
        ]),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    server: {
        watch: {
            usePolling: true,

        }
    },
    resolve: {
        alias: {
            '@': '/resources/js',
            'ziggy': '/vendor/tightenco/ziggy/dist/vue'
        }
    },
    optimizeDeps: {
        include: ["ziggy"],
    },

});