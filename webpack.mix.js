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

mix.postCss(
  'addons/devart/group/sarinah-theme/resources/css/app.css',
  'public/themes/sarinah-theme/css',
  [
    require('tailwindcss'),
  ]
);
