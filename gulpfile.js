var elixir      = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir.config.assetsPath = 'app/';

elixir(function(mix) {
  mix.sass('main.scss');

  // mix.scripts([
  //
  // ]);

  mix.livereload([
    '**/*.php',
    'app/sass/**/*.scss',
    'app/js/**/*.js'
  ]);
});
