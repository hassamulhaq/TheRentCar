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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                pr: {
                    100: "#e0f2f1",
                    200: "#b2e0de",
                    300: "#80cbc4",
                    400: "#4db6ac",
                    500: "#009688",
                    600: "#00796b",
                    700: "#00695c",
                    800: "#004d40",
                    900: "#00332b",
                },
                sec: {
                    100: "#fafafa",
                    200: "#e3f2f1",
                    300: "#f7f7f8",
                    400: "#f5f5f6",
                    500: "#dddddd",
                    600: "#eeeeee",
                    700: "#c4c4c4",
                    800: "#acacac",
                    900: "#acacac",
                },
            },
        },
    },

    plugins: [forms],
};
