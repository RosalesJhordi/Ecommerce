/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/Agregar.blade.php"
  ],
  theme: {
    screens: {
      sm: '450px',
      md: '768px',
      lg: '976px',
      xl: '1440px'
    }
  },
  plugins: [],
}

