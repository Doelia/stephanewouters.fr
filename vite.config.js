import { defineConfig } from 'vite'
import preact from '@preact/preset-vite'
import { resolve } from 'path';

const twigRefreshPlugin = {
  name: 'twig-refresh',
  configureServer ({ watcher, ws }) {
    watcher.add(resolve('pages/**/*.php'));
    watcher.on('change', function (path) {
      if (path.endsWith('.php')) {
        ws.send({
          type: 'full-reload'
        });
      }
    });
  }
}

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [preact(), twigRefreshPlugin],

  server: {
    origin: 'http://localhost:5173'
  },

  build: {
    manifest: true,
    rollupOptions: {
      input: '/src/main.jsx'
    },
  },
})


