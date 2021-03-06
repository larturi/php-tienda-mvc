const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        './www/**/*.{html,js,php}',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
}