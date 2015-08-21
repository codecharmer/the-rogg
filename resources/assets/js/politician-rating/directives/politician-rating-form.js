(function (module) {
    'use strict';

    module.directive('politicianRatingForm', directive);

    function directive() {
        return {
            templateUrl: '/build/assets/js/templates/politician-rating-form.html',
            restrict: 'E',
            controller: Controller,
            scope: {}
        }
    }

    Controller.$inject = ['$scope'];

    function Controller($scope) {
        init();

        function init() {

        }
    }
})(angular.module('PoliticianRating'));