var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass([
      './bower_components/bootstrap-sass-official/assets/stylesheets/_bootstrap.scss',
      './bower_components/admin-lte.scss/main.scss',
      './bower_components/font-awesome/scss/font-awesome.scss',
      'app.scss'
    ], 'public/css/app.css');
    mix.scripts([
      './bower_components/jquery/dist/jquery.js',
      './bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js',
      './bower_components/admin-lte.scss/javascripts/app.js',
      'main.js'
    ], 'public/js/app.js');
    mix.copy([
      'bower_components/bootstrap-sass-official/assets/fonts/bootstrap',
      'bower_components/font-awesome/fonts',
      ], 'public/fonts');
});
