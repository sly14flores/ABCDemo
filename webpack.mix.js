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

mix.sass('resources/sass/app.scss', 'public/css');
mix.copy('resources/plugins/fontawesome-free/css/all.min.css', 'public/css/all.min.css');
mix.copy('resources/dist/css/adminlte.min.css', 'public/css/adminlte.min.css');
mix.copy('resources/plugins/fontawesome-free/webfonts', 'public/webfonts');

mix.js('resources/js/jquery.js', 'public/js');
mix.copy('resources/plugins/bootstrap/js/bootstrap.bundle.min.js', 'public/js/bootstrap.bundle.min.js');
mix.copy('resources/dist/js/adminlte.min.js', 'public/js/adminlte.min.js');

mix.js('resources/js/login.js', 'public/js').version();
mix.js('resources/js/register.js', 'public/js').version();
mix.js('resources/js/users.js', 'public/js').version();