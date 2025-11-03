import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteObfuscateFile } from 'vite-plugin-obfuscator'; // gunakan named export

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/tracer-study/style.css',
                'resources/css/tracer-study/survey/style.css',
                'resources/css/tracer-study/dashboard/style.css',
                'resources/css/tracer-study/rev/style.css',
                'resources/css/siakad/style.css',
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
