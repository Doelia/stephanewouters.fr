import { defineConfig } from 'vite'
import preact from '@preact/preset-vite'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [preact()],

  server: {
    origin: 'http://localhost:5173'
  },

  // compile also projects.html
    // build: {

  build: {
    manifest: true,
    rollupOptions: {
      input: '/src/main.jsx'
    },
    // cssCodeSplit: true
  },
})
