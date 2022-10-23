import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'
const path = require('path')

export default defineConfig({
    resolve:{
        alias:{
          '@' : path.resolve(__dirname, './resources/vue')
        },
      },    
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/vue/index.ts',
                'resources/vue/assets/tailwind.css',
            ],
            refresh: true,
        }),
    ],
});
