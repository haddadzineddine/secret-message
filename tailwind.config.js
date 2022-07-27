module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                main: "#090979",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
