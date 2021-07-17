module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: 'media', // or 'media' or 'class'
    theme: {
        extend: {},
        minHeight: {
            '9/10': '90%',
        }
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
