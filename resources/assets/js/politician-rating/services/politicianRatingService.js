(function (module) {
    'use strict';

    module.factory('politicianRatingService', service);

    service.$inject = ['$http'];

    function service($http) {
        return {
            getReview: function (userId, politicianId) {
                return $http.get('/api/politicians/get-review', {params: {userId: userId, politicianId: politicianId}});
            },
            reviewPolitician: function (model) {
                return $http.post('/api/politicians/review-politician', {model: model});
            }
        }
    }
})(angular.module('PoliticianRating'));