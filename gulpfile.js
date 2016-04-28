var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
  mix.sass([
    'public/scss/app.scss'
  ], 'public/css');
});

/*
elixir(function(mix) {
  mix.browserify('public/js/main.js', 'public/js/main.js');
});

elixir(function(mix) {
  mix.version(['css/app.css', 'js/main.js']);
});

elixir(function(mix) {
  mix.browserSync();
});
*/
