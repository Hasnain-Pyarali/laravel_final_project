module.exports = {
    mode: 'jit',
    purge: [
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
      './storage/framework/views/*.php',
      './resources/views/**/*.blade.php',
      './resources/js/**/*.vue',
    ],
    theme: {
      extend: {},
    },
    variants: {},
    plugins: [],
  }