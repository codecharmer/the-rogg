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

        $scope.showHouse = function () {
            $scope.filterByOffice = 'House';
            $scope.filterByCandidate = false;
        };

        $scope.showSenate = function () {
            $scope.filterByOffice = 'Senate';
            $scope.filterByCandidate = false;
        };

        $scope.showCandidates = function () {
            $scope.filterByOffice = '';
            $scope.filterByCandidate = true;
        };

        function init() {
            $scope.filterByOffice = "House";
            $scope.filterByCandidate = false;

            dataService.getAll().then(function (results) {
                $scope.data = results.data;
            });

            politicianService.getList().then(function (results) {
                $scope.politicians = results.data;
            });
        }
    }
})(angular.module('PoliticianList'));