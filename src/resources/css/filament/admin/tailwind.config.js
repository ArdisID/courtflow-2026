/** @type {import('tailwindcss').Config} */

import preset from "../../../../vendor/filament/filament/tailwind.config.preset";

export default {
    presets: [preset],

    content: [
        "./app/**/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",

        "./vendor/filament/**/*.blade.php",
        "./vendor/awcodes/overlook/resources/**/*.blade.php",
        "./vendor/andrewdwallo/filament-selectify/resources/views/**/*.blade.php",
        "./vendor/diogogpinto/filament-auth-ui-enhancer/resources/**/*.blade.php",
    ],

    darkMode: "class",

    theme: {
        extend: {},
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};