/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      screens: {
        // sm: "540px",
        // // => @media (min-width: 576px) { ... }

        // md: "720px",
        // // => @media (min-width: 960px) { ... }

        // lg: "960px",
        // // => @media (min-width: 1440px) { ... }
      },
      // fontFamily: {
      //   ibm: ["IBM Plex Sans Thai"],
      // },
    },
  },
  plugins: [],
};
