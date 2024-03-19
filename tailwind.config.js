/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{html,js,php}"],
  theme: {
    extend: {    
      fontFamily: {
      'display': 'Roboto, sans-serif',
      'title': 'Inter, sans-serif',
      },
    },
  },
  plugins: [],
}