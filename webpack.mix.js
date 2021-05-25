let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */
mix.setPublicPath('dist');

mix.setResourceRoot('../');

mix.js('assets/js/custom.js', 'dist/js/custom.min.js')
    .sass('assets/sass/custom.scss', 'dist/css/custom.min.css')
