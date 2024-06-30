/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'poppins': ['Poppins'],
   },
    extend: {
      backgroundImage: {
        'hero-pattern': "url('/public/img/bg-bromo.png')",
      }
    },
  },
  plugins: [],
}

