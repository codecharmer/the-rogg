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

    Controller.$inject = ['$scope', 'politicianService', 'dataService'];

    function Controller($scope, politicianService, dataService) {
        init();

        function init() {
            dataService.getStates().then(function (results) {
                $scope.states = results.data;
            });

            dataService.getParties().then(function (results){
                $scope.parties = results.data;
            });

            politicianService.getList().then(function (results) {
                $scope.politicians = results.data;
            });
        }
    }
})(angular.module('PoliticianList'));