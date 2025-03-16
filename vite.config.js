import path from "path";
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
      cors: {
          origin: /^https?:\/\/(?:(?:[^:]+\.)?localhost|workopia\.local|127\.0\.0\.1|\[::1\])(?::\d+)?$/,
      },
  },

});
