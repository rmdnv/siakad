/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Outfit', 'sans-serif'],
      },
      colors: {
        primary: {
          DEFAULT: '#a855f7',
          dark: '#7e22ce',
        },
        dark: {
          DEFAULT: '#0a0a0a',
          card: '#171717',
        }
      }
    },
  },
  plugins: [],
}
