module.exports = {
  content: [
    './docs/**/*.html'
  ],
  theme: {
    container: {
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '6rem',
        '2xl': '8rem',
      },
    },
    colors: {
      'primary': '#000024',
      'primary-alt': '#000048',
      'action': '#4D4DFF',
      'light': '#9999FF',
      'ghost-white': '#FAFAFF',
      'white': '#FFFFFF',
    },
    fontFamily: {
      sans: ['"Space Grotesk"', 'sans-serif'],
    },
    extend: {
      fontSize: {
        '3xl': '2rem',
        '4xl': '2.5rem',
      },
    },
  },
  plugins: [],
}