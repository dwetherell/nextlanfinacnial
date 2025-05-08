import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    build: {
        manifest: true,
        rtl: true,
        outDir: 'public/build/',
        cssCodeSplit: true,
        rollupOptions: {
            output: {
                assetFileNames: (css) => {
                    const ext = css.name.split('.').pop();
                    return ext === 'css'
                        ? 'css/[name].min.css'
                        : 'icons/' + css.name;
                },
                entryFileNames: 'js/[name].js',
            },
        },
    },
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                { src: 'resources/fonts', dest: '' },
                { src: 'resources/images', dest: '' },
                { src: 'resources/js', dest: '' },
                { src: 'resources/json', dest: '' },
                { src: 'resources/libs', dest: '' },
            ]
        }),
    ],
});
