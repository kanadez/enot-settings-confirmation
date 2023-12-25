const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.scripts([
        "resources/js/core.js",
        "resources/js/reface.js",
    ], 'public/js/all.combined.js')
    .copy('resources/fonts/', 'public/fonts')
    .copy('resources/img/', 'public/img')
    .css('resources/css/gallery.css', 'public/css')
    .css('resources/css/style.css', 'public/css')
    .css('resources/css/style1.css', 'public/css')
    .css('resources/css/style2.css', 'public/css')
    .css('resources/css/header-footer.css', 'public/css')
    .version();

