const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 | npm run prod
 | npm run dev
 | npm run watch
 */

mix.js('resources/js/common.js', 'public/js')
    .js('resources/js/jquery.spincrement.min.js', 'public/js')
    .js('resources/js/lazyload.min.js', 'public/js')
    .js('resources/js/loadPage.js', 'public/js')
    .js('resources/js/owl.carousel.min.js', 'public/js')
        .postCss('resources/css/animate.css', 'public/css')
        .postCss('resources/css/media.css', 'public/css')
        .postCss('resources/css/bootstrap.min.css', 'public/css')
        .postCss('resources/css/style.css', 'public/css');
