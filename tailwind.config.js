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
            animation: {
                'zoomInOut': 'zoomInOut 1.5s ease-out forwards',
                'zoom-pulse': 'zoomInOut 3s ease-in-out infinite',
                'float': 'float 6s ease-in-out infinite',
                'slide-in': 'slideIn 0.5s ease-out',
                'fade-in': 'fadeIn 1s ease-out',
                'float-delayed': 'float 3s ease-in-out 0.5s forwards',
            },
            keyframes: {
                zoomInOut: {
                    '0%': { transform: 'scale(1.2)' },
                    '100%': { transform: 'scale(1)' },
                    '0%, 100%': { transform: 'scale(1)' },
                    '50%': { transform: 'scale(1.05)' },
                },
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-20px)' },
                },
                slideIn: {
                    '0%': { transform: 'translateX(-100%)', opacity: '0' },
                    '100%': { transform: 'translateX(0)', opacity: '1' },
                },
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
            }
        },
    },
    plugins: [],
};
