import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";

// https://vite.dev/config/
export default defineConfig({
  plugins: [vue()],
  server: {
    proxy: {
      "/api": {
        target: "http://localhost:8000/"
        // changeOrigin: true, // Optional for CORS issues (explained below)
        // secure: false, // Optional for development with self-signed certificates
        // ws: true // Required for WebSocket connections
      }
    }
  }
});
