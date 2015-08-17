(function (module) {
    'use strict';

    module.directive('politicianList', directive);

    function directive() {
        return {
            templateUrl: '/assets/templates/politician-list/politician-list.html',
            restrict: 'E',
            controller: Controller,
            scope: {}
        }
    }

    Controller.$inject = ['$scope', 'politicianService'];

    function Controller($scope, politicianService) {
        init();

        function init() {
            politicianService.getList().then(function (results) {
                $scope.politicians = results.data;
            });
        }
    }
})(angular.module('PoliticianList'));