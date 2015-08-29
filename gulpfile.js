var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix
        .sass('app.scss', 'public/assets/css')
        .scripts([
            '../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap/tooltip.js',
            '../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap/tab.js',
            '../../../node_modules/angular/angular.js',
            'mobile-navigation.js',
            'politician-list/app.module.js',
            'politician-list/services/politicianService.js',
            'politician-list/services/dataService.js',
            'politician-list/directives/politician-list.js',
            'politician-rating/app.module.js',
            'politician-rating/services/politicianRatingService.js',
            'politician-rating/directives/politician-rating-form.js'
        ], 'public/assets/js/all.js')
        .copy('resources/assets/js/politician-list/templates', 'public/build/assets/js/templates')
        .copy('resources/assets/js/politician-rating/templates', 'public/build/assets/js/templates')
        .version(['assets/css/app.css', 'assets/js/all.js']);
});