import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteObfuscateFile } from 'vite-plugin-obfuscator'; // gunakan named export

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),

        viteObfuscateFile({    // panggil plugin dengan benar
            // Obfuscator options:
            compact: true,
            controlFlowFlattening: true,
            deadCodeInjection: true,
            stringArray: true,
            stringArrayEncoding: ['base64'],
            // apply only during build
            apply: 'build',
        }),
    ],
    build: {
        minify: 'terser',
    }
});
