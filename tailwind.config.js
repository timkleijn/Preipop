/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Helvetica', ...defaultTheme.fontFamily.sans]
    },
    animation: {
      marquee: 'marquee 25s linear infinite',
      marquee2: 'marquee2 25s linear infinite',
      square: 'square 7s linear infinite',
      square2: 'square2 7s linear infinite'
    },
    keyframes: {
      marquee: {
        '0%': { transform: 'translateX(0%)' },
        '100%': { transform: 'translateX(-100%)' },
      },
      marquee2: {
        '0%': { transform: 'translateX(100%)' },
        '100%': { transform: 'translateX(0%)' },
      },
      square: {
        '0%': {opacity: '100%'},
        '50%': {opacity: '0%'},
        '100%': {opacity: '100%'}
      },
      square2: {
        '0%': {opacity: '0%'},
        '50%': {opacity: '100%'},
        '100%': {opacity: '0%'}
      }
    },
  },
  plugins: [],
}
}
