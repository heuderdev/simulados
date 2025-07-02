import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php'
    ],
    darkMode: 'class', // Enable dark mode
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    light: '#3b82f6', // Light primary color
                    DEFAULT: '#6366f1', // Default primary color
                    dark: '#5653d4',   // Dark primary color
                },
            },
        },
    },

    plugins: [forms, require('daisyui')],
    daisyui: {
        themes: ["light", "dark"], // Temas suportados (DaisyUI)
        darkTheme: "dark", // Tema escuro padrão
    },

};
