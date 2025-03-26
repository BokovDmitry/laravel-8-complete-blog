const { colors } = require('laravel-mix/src/Log');

module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        'dark-purple': '#2d0a3d',
        'purple': '#7a03a8',
      },
      fontFamily: {
        anton: ['Anton', 'sans-serif'], // Add Anton font
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ],
};