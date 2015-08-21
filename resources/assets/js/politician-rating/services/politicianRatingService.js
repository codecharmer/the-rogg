(function (module) {
    'use strict';

    module.factory('politicianRatingService', service);

    service.$inject = ['$http'];

    function service($http) {
        return {
            reviewPolitician: function (model) {
                return $http.post('/api/politicians/review-politician', {model: model});
            }
        }
    }
})(angular.module('PoliticianRating'));