const mix = require('laravel-mix');

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

mix.sass('resources/assets/scss/app.scss', 'assets/css')
    .sass('resources/assets/scss/bootstrap.scss', 'assets/css')
    .js('resources/assets/js/custom.js', 'assets/js')
    .sourceMaps();
