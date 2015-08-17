var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix.scripts([
            '../../../node_modules/angular/angular.js',
            'politician-list/app.module.js'
        ],
        'public/assets/js/all.js');
});

elixir(function (mix) {
    mix.sass('app.scss', 'public/assets/css');
});

elixir(function (mix) {
    mix.version(['assets/css/app.css', 'assets/js/all.js']);
});