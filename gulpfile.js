var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.scss', 'public/assets/css');
});

// Outputs to build.
elixir(function(mix){
    mix.version('assets/css/app.css');
});
