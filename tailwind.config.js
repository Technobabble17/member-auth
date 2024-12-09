/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.antlers.html',
        './resources/**/*.antlers.php',
        './resources/**/*.blade.php',
        './resources/**/**/*.blade.php',
        './resources/**/**/*.antlers.html',
        './resources/**/*.vue',
        './content/**/*.md',
    ],

    theme: {
        extend: {},
    },

    plugins: [
        require('@tailwindcss/typography'),
    ],
};
