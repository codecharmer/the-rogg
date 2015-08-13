var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('app.scss', 'public/assets/css');
});

elixir(function(mix){
    mix.version('assets/css/app.css');
});