/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: {
                sm: "2rem",
                lg: "3rem",
                xl: "4rem",
                "2xl": "5rem",
            },
        },
        extend: {
            colors: {
                primary: "#5E8B7E",
                secondary: "#969696",
                three: "#080B10",
                dark: "#0f172a",
            },
            screens: {
                "2xl": "1320px",
            },
        },
    },
    plugins: [],
};
