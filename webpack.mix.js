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

mix.css('resources/css/website.css', 'public/build/website/css/app.css');

mix.copy('node_modules/tiny-slider/dist/tiny-slider.js', 'public/js/tiny-slider.js')
   .copy('node_modules/tiny-slider/dist/tiny-slider.css', 'public/css/tiny-slider.css');
