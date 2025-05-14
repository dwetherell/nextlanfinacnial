import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    build: {
        manifest: true,
        outDir: 'public/build',
        cssCodeSplit: true,
        rollupOptions: {
            output: {
                assetFileNames: (assetInfo) => {
                    const ext = assetInfo.name.split('.').pop();
                    return ext === 'css'
                        ? 'css/[name].min.css'
                        : 'icons/[name].[ext]';
                },
                entryFileNames: 'js/[name].js',
            },
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss', // ✅ Add SCSS here
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                { src: 'resources/fonts', dest: '' },
                { src: 'resources/images', dest: '' },
                { src: 'resources/json', dest: '' },
                { src: 'resources/libs', dest: '' },
            ]
        }),
    ],
});
