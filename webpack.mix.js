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

// mix.js('resources/js/template/bootstrap.min.js', 'public/js')
// mix.js('resources/js/template/custom.js', 'public/js')
// mix.js('resources/js/template/html5element.js', 'public/js')
// mix.js('resources/js/template/html5shiv.js', 'public/js')
// mix.js('resources/js/template/jquery.easing.1.3.js', 'public/js')
// mix.js('resources/js/template/jquery.isotope.js', 'public/js')
// mix.js('resources/js/template/jquery.nav.js', 'public/js')
// mix.js('resources/js/template/jquery-1.11.0.min.js', 'public/js')
// mix.js('resources/js/template/jquery-scrolltofixed.js', 'public/js')
// mix.js('resources/js/template/respond-1.1.0.min.js', 'public/js')
// mix.js('resources/js/template/wow.js', 'public/js');

mix.styles(['resources/css/template/animate.css',
    'resources/css/template/animation.css]',
    'resources/css/template/bootstrap.min.css',
    'resources/css/template/font-awesome.css',
    'resources/css/template/style.css'],
    'public/css/all.css')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
