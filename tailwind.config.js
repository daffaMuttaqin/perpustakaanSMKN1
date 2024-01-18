/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            height: {
                22: "89px",
                120: "560px",
                125: "692px",
            },
            width: {
                22: "89px",
                120: "560px",
                125: "692px",
            },
            colors: {
                primary1: "#6477DB",
                bgSubJudul: "#E3E9FFBF",
                fontSubJudul: "#4F4F4F",
                background1: "#f3f3f3",
            },
            fontFamily: {
                rubik: ["Rubik"],
                id: ["Text Me One"],
                fira: ["Fira Sans Extra Condensed"],
                robotoCondensed: ["Roboto Condensed"],
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
