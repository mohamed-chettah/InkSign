/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "black-100": "#31333b",
                "black-200": "#443e3c",
                "gold-200": "#f0bf6c",
                'saffron-mango': {
                    '50': '#f0bf6c',
                    '100': '#f0bf6c',
                    '200': '#f0bf6c',
                    '300': '#f0bf6c',
                    '400': '#f0bf6c',
                    '500': '#f0bf6c',
                    '600': '#f0bf6c',
                    '700': '#f0bf6c',
                    '800': '#f0bf6c',
                    '900': '#f0bf6c',
                    '950': '#f0bf6c',
                },

            },
        },
    },

    plugins: [
        require('daisyui'),
    ],
}
