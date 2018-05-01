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
            //plantilla
            'resources/assets/js/plantilla/jquery.min.js',
            'resources/assets/js/plantilla/tether.min.js',
            'resources/assets/js/plantilla/bootstrap.min.js',
            'resources/assets/js/plantilla/jquery.slimscroll.js',
            'resources/assets/js/plantilla/waves.js',
            'resources/assets/js/plantilla/sidebarmenu.js',
            'resources/assets/js/plantilla/sticky-kit.min.js',
            'resources/assets/js/plantilla/custom.js',
            'resources/assets/js/plantilla/jquery.flot.js',
            'resources/assets/js/plantilla/jquery.flot.tooltip.min.js',
            'resources/assets/js/plantilla/flot-data.js',
            'resources/assets/js/plantilla/jQuery.style.switcher.js'
        ],
        'public/js/plantilla.js')

    .styles(
        [
            //plantilla estilos
            'resources/assets/css/plantilla/bootstrap.min.css',
            'resources/assets/css/plantilla/bootstrap.min.css.map',
            'resources/assets/css/plantilla/animate.css',
            'resources/assets/css/plantilla/spinner.css',
            'resources/assets/css/plantilla/style.css',
            // TODO canviar tema a part
            'resources/assets/css/plantilla/colors/purple-dark.css',
            // 'resources/assets/css/plantilla/colors/default-dark.css',
            'resources/assets/css/auth/signin.css',
            'resources/assets/css/utilidad.css'
        ],
        'public/css/plantilla.css')


    .scripts(
        [
            //tablas 
            'resources/assets/js/tablas/select2.js',
            'resources/assets/js/tablas/main.js'
        ],
        'public/js/tabla.js')


    .styles(
        [
            //tablas estilos
            'resources/assets/css/tablas/main.css',
            'resources/assets/css/tablas/util.css',
            'resources/assets/css/tablas/animate.css',
            'resources/assets/css/tablas/select2.css',
            'resources/assets/css/tablas/perfect-scrollbar.css'
        ],
        'public/css/tabla.css');