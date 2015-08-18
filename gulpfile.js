var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix
        .sass('app.scss', 'public/assets/css')
        .scripts([
            '../../../node_modules/angular/angular.js',
            'politician-list/app.module.js',
            'politician-list/services/politicianService.js',
            'politician-list/services/dataService.js',
            'politician-list/directives/politician-list.js'
        ], 'public/assets/js/all.js')
        .version(['assets/css/app.css', 'assets/js/all.js']);
});