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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/client/js/jquery.flexslider.js', 'public/client/js/jquery.flexslider.js')
    .js('resources/client/js/jquery.magnific-popup.js', 'public/client/js/jquery.magnific-popup.js')
    .js('resources/client/js/creditly.js', 'public/client/js/creditly.js')
    .js('resources/client/js/creditly2.js', 'public/client/js/creditly2.js')
    .js('resources/client/js/easing.js', 'public/client/js/easing.js')
    .js('resources/client/js/easyResponsiveTabs.js', 'public/client/js/easyResponsiveTabs.js')
    .js('resources/client/js/imagezoom.js', 'public/client/js/imagezoom.js')
    .js('resources/client/js/move-top.js', 'public/client/js/move-top.js')
    .js('resources/client/js/scroll.js', 'public/client/js/scroll.js')
    .js('resources/client/js/SmoothScroll.min.js', 'public/client/js/SmoothScroll.min.js')
    .js('resources/client/js/add_to_cart.js', 'public/client/js/add_to_cart.js')
    .js('resources/client/js/comment_product.js', 'public/client/js/comment_product.js')
    .js('resources/client/js/rating_product.js', 'public/client/js/rating_product.js')
    .combine(['resources/admin/js/*'], 'public/admin/js/admin.js')
    .combine(['resources/client/css/*'], 'public/client/css/client.css')
    .combine(['resources/admin/css/*'], 'public/admin/css/admin.css')
    .sass('resources/sass/app.scss', 'public/css');
