/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                'primary': '#060606'
            },
            fontFamily: {
                'roboto': ['Roboto', 'sans-serif']
            },
            fontSize: {
                "2xs": '.63rem',
            },
        },
        plugins: [],
    }
}
