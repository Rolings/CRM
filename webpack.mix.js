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
/**ADMIN**/
mix.js('resources/assets/admin/js/app.js', 'public/admin/js');

/**FRONT**/

mix.js('resources/assets/front/js/app.js', 'public/front/js');

mix.styles([
    'resources/assets/front/css/bootstrap.css',
    'resources/assets/front/css/style.css',
    'resources/assets/front/css/smoothDivScroll.css',
    'resources/assets/front/css/jquery.fancybox.css',
    'resources/assets/front/css/jquery.fancybox-buttons.css',
    'resources/assets/front/css/jquery.fancybox-thumbs.css',
], 'public/front/css/libs.css');
mix.copyDirectory( 'resources/assets/front/image/','public/front/image/');


