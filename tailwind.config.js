/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'brand-primary': '#171717',
        'input-primary' : '#5C5C5C'
      },
     fontFamily: {
        'fredoka':'Fredoka'
      },
    },
  },
  plugins: [],
}

