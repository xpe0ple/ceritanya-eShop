import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    build: {
        outDir: "public/build", // Specify the output directory for production builds
        rollupOptions: {
            input: {
                app: "resources/js/app.js", // Main entry point for your JS
                style: "resources/css/app.css", // Main entry point for your CSS
            },
        },
    },
});
