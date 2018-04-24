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

mix.scripts(
    [
    'resources/assets/js/plantilla/jquery.min.js',
    'resources/assets/js/plantilla/tether.min.js',
    'resources/assets/js/plantilla/bootstrap.min.js',
    'resources/assets/js/plantilla/jquery.slimscroll.js',
    'resources/assets/js/plantilla/waves.js',
    'resources/assets/js/plantilla/sidebarmenu.js',
    'resources/assets/js/plantilla/sticky-kit.min.js',
    'resources/assets/js/plantilla/custom.min.js',
    'resources/assets/js/plantilla/jquery.flot.js',
    'resources/assets/js/plantilla/jquery.flot.tooltip.min.js',
    'resources/assets/js/plantilla/flot-data.js',
    'resources/assets/js/plantilla/jQuery.style.switcher.js'
    ], 
    'public/js/plantilla.js')


    .styles(
        [
            // 'resources/assets/css/plantilla/bootstrap.min.css',
            // 'resources/assets/css/plantilla/animate.css',
            // 'resources/assets/css/plantilla/spinner.css',
            'resources/assets/css/plantilla/style.css',
            'resources/assets/css/plantilla/colors/default-dark.css'
        ],
    'public/css/plantilla.css');



//    .sass('resources/assets/sass/app.scss', 'public/css/bootstrap.css');
