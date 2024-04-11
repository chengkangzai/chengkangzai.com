import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/filament/admin/theme.css'],
            refresh: true,
        }),
    ],
    valetTls: 'chengkangzai-v2.com.test', // [!tl add]
    detectTls: 'chengkangzai-v2.com.test', // [!tl add]
});
