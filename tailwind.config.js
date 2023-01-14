/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/**/*.ts",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    container: {
      center: true,
      padding: '2rem',
    },
    extend: {
      fontFamily: {
        sans: [
          "Montserrat",
          "ui-sans-serif",
          "system-ui",
          "sans-serif",
        ],
      },
      colors: {
        primary: {
          DEFAULT: "#17888A",
          "dark-1": "#0B7475",
          "dark-2": "#005F5F",
          "light-1": "#239E9F",
          "light-2": "#6C9F6B",
          "op15": 'rgb(35 158 159 / 15%)',
          "op0": 'rgb(35 158 159 / 0%)',
        },
        accent: {
          DEFAULT: "#F9AB35",
          dark: "#C79C3D",
        },
        gr: {
          "50": "#F9F8F9",
          "100": "#EAE8EA",
          "400": "#A3A4A4",
          "600": "#7A7C7C",
          "800": "#464446"
        }
      },
    },
  },
  plugins: [],
}
