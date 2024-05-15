import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                foreground: "#FFFFFF",
                muted: "#999999",
                background: "#232323",
                highlight: "#8B2CF5",
                accent: "#2C2C2C",
                stroke: "#363637"
            },
            fontFamily: {
                sans: ['Kanit', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
