module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        'dreams': ['Dreams'],
        'amonos': ['Amonos'],
      },
      colors: {
        'blue-primary': '#259CD7',
        'red-primary': '#E83549',
        'black-primary': '#050505',
      },
      container: {
        center: true,
        padding: '1rem',
      }
    },
  },
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  variants: {
    extend: {},
  },
  plugins: [],
}
