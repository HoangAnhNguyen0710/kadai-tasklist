module.exports = {
  content: [
     "./resources/**/*.blade.php",
     "./resources/**/*.js",
  ],
  theme: {
     extend: {},
  },
  plugins: [require("@tailwindcss/typography" ), require( "daisyui" )],
}