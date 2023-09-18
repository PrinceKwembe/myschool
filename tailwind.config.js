/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        brand: "rgb(var(--color-brand) / <alpha-value>)",
        alt: "rgb(var(--color-alt) / <alpha-value>)",
      }
    },
    container: {
      center: true,
      padding: '1.5rem',
    }
  },
  plugins: [],
}




