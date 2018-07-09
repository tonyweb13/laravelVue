let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------clear
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.styles('resources/assets/font-awesome/css/font-awesome.min.css', 'public/font-awesome/css/font-awesome.min.css');

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/plugins/toastr/toastr.min.css',
    'resources/assets/css/plugins/gritter/jquery.gritter.css',
    'resources/assets/css/animate.css',
    'resources/assets/css/style.css',
    'resources/assets/css/custom.css',
],'public/css/template.css');

mix.scripts([
    'resources/assets/js/jquery-2.1.1.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/plugins/metisMenu/jquery.metisMenu.js',
    'resources/assets/js/plugins/slimscroll/jquery.slimscroll.min.js',
    'resources/assets/js/plugins/flot/jquery.flot.js',
    'resources/assets/js/plugins/flot/jquery.flot.tooltip.min.js',
    'resources/assets/js/plugins/flot/jquery.flot.spline.js',
    'resources/assets/js/plugins/flot/jquery.flot.resize.js',
    'resources/assets/js/plugins/flot/jquery.flot.pie.js',
    'resources/assets/js/plugins/peity/jquery.peity.min.js',
    'resources/assets/js/inspinia.js',
    'resources/assets/js/plugins/pace/pace.min.js',
    'resources/assets/js/plugins/jquery-ui/jquery-ui.min.js',
    'resources/assets/js/plugins/gritter/jquery.gritter.min.js',
    'resources/assets/js/plugins/sparkline/jquery.sparkline.min.js',
    'resources/assets/js/plugins/chartJs/Chart.min.js',
    'resources/assets/js/plugins/toastr/toastr.min.js'
],'public/js/template.js');

mix.js('resources/assets/js/app.js', 'public/js/app.js');

mix.copy('resources/assets/font-awesome/fonts/', 'public/font-awesome/fonts/', false);
mix.copyDirectory('resources/assets/img', 'public/img');
mix.copyDirectory('resources/assets/css/patterns', 'public/css/patterns');
mix.version();