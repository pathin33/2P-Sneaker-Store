import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        tailwindcss(),
        laravel({
            input: [
                "resources/css/app.css", // Tailwind
                "resources/css/header.css", // CSS thuần
                "resources/css/footer.css", // CSS thuần
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
});
