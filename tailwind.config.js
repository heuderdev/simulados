import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/daisyui/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // Cor Principal (Vibrante)
                'principal-rosa': '#db2777',

                // Cores Complementares (Verdes)
                'complementar-esmeralda': '#059669',
                'complementar-lima': '#84cc16',
                'complementar-agua': '#2dd4bf',

                // Cores Análogas (Roxos e Laranjas)
                'analoga-roxo': '#7e22ce',
                'analoga-laranja': '#f97316',
                'analoga-rosa-claro': '#f9a8d4',

                // Cores da Tríade (Azul e Amarelo)
                'triade-ciano': '#0891b2',
                'triade-ouro': '#facc15',

                // Cores Neutras
                'neutro-chumbo': '#1f2937',
                'neutro-claro': '#e5e7eb',
                'neutro-creme': '#fef3c7',
                'neutro-gelo': '#f9fafb',

                // Preto e Branco já existem por padrão, mas podemos defini-los se quisermos
                // 'preto': '#000000',
                // 'branco': '#ffffff',
            },
        },
    },
    daisyui: {
        themes: [
            {
                // Cor Principal (Vibrante)
                'principal-rosa': '#db2777',

                // Cores Complementares (Verdes)
                'complementar-esmeralda': '#059669',
                'complementar-lima': '#84cc16',
                'complementar-agua': '#2dd4bf',

                // Cores Análogas (Roxos e Laranjas)
                'analoga-roxo': '#7e22ce',
                'analoga-laranja': '#f97316',
                'analoga-rosa-claro': '#f9a8d4',

                // Cores da Tríade (Azul e Amarelo)
                'triade-ciano': '#0891b2',
                'triade-ouro': '#facc15',

                // Cores Neutras
                'neutro-chumbo': '#1f2937',
                'neutro-claro': '#e5e7eb',
                'neutro-creme': '#fef3c7',
                'neutro-gelo': '#f9fafb',
            }
        ]
    },
    plugins: [forms, require('daisyui')],

};
