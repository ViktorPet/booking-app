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


mix.js([
    'resources/assets/js/chart-area-demo.js',
    'resources/assets/js/chart-bar-demo.js',
    'resources/assets/js/chart-pie-demo.js',
    'resources/assets/js/sb-admin-2.min.js'], 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
