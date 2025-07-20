import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                "fade-in": {
                    "0%": {
                        opacity: 0
                    },
                    "100%": {
                        opacity: 1
                    },
                }
            },
            animation: {
                fadein: 'fade-in 0.75s ease-in 0.25s 1 forwards'
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography')
    ],
};
