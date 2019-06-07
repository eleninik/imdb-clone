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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/styles.scss', 'public/css')
   .browserSync({
      host: '192.168.10.10',
      proxy: 'http://amdb.test'
   });

mix.copy('node_modules/chosen-js/chosen.css', 'public/css/chosen/chosen.css');

mix.copy('node_modules/chosen-js/chosen.jquery.js', 'public/js/chosen.jquery.js');
