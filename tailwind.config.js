/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        background: '#F3F3F3',
        primary: '#34A853',
        secondary: '#78AB98',
        text_primary: '#313131',
        text_secondary: '#787878',
        field_border: '#007AFF',
      },
    },
  },
  plugins: [],
}
