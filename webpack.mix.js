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

// Javascript Mixs
mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/dashboard/dashboard.js', 'public/js')

// Css Mixs
mix.styles(['resources/css/dashboard/main.css',
'resources/css/dashboard/color.css',
'resources/css/dashboard/normalize.css',
'resources/css/dashboard/typography.css', ], 'public/css/dashboard.css')