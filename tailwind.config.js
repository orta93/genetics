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
        'blue-landing': '#194066',
        'red-primary': '#E83549',
        'brown-primary': '#aca1a9',
        'black-primary': '#050505',
      },
      container: {
        center: true,
        padding: '1rem',
      },
      minHeight: {
        '96': '24rem'
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
