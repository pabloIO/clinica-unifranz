let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/config.js', 'public/js')
    .js('resources/assets/js/getFormData.js', 'public/js')
    .js('resources/assets/js/logout.js', 'public/js')
    .js('resources/assets/js/login.js', 'public/js')
    .js('resources/assets/js/middleware.js', 'public/js')
    .js('resources/assets/js/reserves.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');