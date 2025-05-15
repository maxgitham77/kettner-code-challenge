/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screen: {
            sm: '576px',
            md: '768px',
            lg: '992px',
            xl: '1200px'
        },
        container: {
            center: true,
            padding: '1rem'
        },
        extend: {
            colors: {
                primary: '#A6BB8D',
            },
            fontFamily: {
                'poppins': ['Poppins'],
                'roboto': ['Roboto'],
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms')
    ],
}

