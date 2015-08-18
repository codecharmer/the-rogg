(function (module) {
    'use strict';

    module.directive('politicianList', directive);

    function directive() {
        return {
            templateUrl: '/build/assets/js/templates/politician-list.html',
            restrict: 'E',
            controller: Controller,
            scope: {}
        }
    }

    Controller.$inject = ['$scope', 'politicianService', 'dataService'];

    function Controller($scope, politicianService, dataService) {
        init();

        function init() {
            dataService.getAll().then(function (results) {
                $scope.data = results.data;
            });

            politicianService.getList().then(function (results) {
                $scope.politicians = results.data;
            });
        }
    }
})(angular.module('PoliticianList'));