/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./View/modules/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        'cor-paleta-1' : '#0454d4',
        'cor-paleta-2' : '#40c0cb',
        'cor-paleta-3' : '#f9f2e7',
        'cor-paleta-4' : '#aee239',
        'cor-paleta-5' : '#8fbe00',
      },
    },
  },
  plugins: [],
}

