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
        },
    },

    plugins: [forms],
};

module.exports = {
    theme: {
        extend: {
            backgroundColor: {
                'custom-bg': '#f0f0f0', // Stel een aangepaste achtergrondkleur in
            },
            fontFamily: {
                'custom-font': ['Arial', 'sans-serif'], // Stel een aangepast lettertype in
            },
        },
    },
    variants: {},
    plugins: [],
};