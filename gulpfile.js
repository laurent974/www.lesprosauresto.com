var elixir      = require('laravel-elixir');

elixir.config.assetsPath = 'app';
elixir.config.viewPath = '';

elixir(function(mix) {
  mix
    .sass('main.scss')
    .scripts([
      'vendor/jquery-3.0.0.js',
      'vendor/trunk.js',
      'app.js'
    ]);

    mix.browserSync([
      'app/sass/**/*.scss',
      'app/js/**/*.js',
      '**/*.php'
    ]);
});
