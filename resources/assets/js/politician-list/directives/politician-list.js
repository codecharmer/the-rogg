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
            $scope.filterByOffice = 'Representative';
            $scope.filterByCandidate = false;
        };

        $scope.showSenate = function () {
            $scope.filterByOffice = 'Senator';
            $scope.filterByCandidate = false;
        };

        $scope.showCandidates = function () {
            $scope.filterByOffice = '';
            $scope.filterByCandidate = true;
        };

        $scope.showPolitician = function () {
            var selectedPolitician = JSON.parse($scope.selectedPolitician);
            $scope.filterByName = selectedPolitician.name;

            if (selectedPolitician.isPresidentialCandidate) {
                $scope.filterByCandidate = true;
                $scope.filterByOffice = '';
            } else {
                $scope.filterByCandidate = false;
                $scope.filterByOffice = selectedPolitician.office;
            }

        };

        function init() {
            $scope.filterByOffice = 'Representative';
            $scope.filterByCandidate = false;
            $scope.orderBy = 'name';

            dataService.getAll().then(function (results) {
                $scope.data = results.data;
            });

            politicianService.getList().then(function (results) {
                $scope.politicians = results.data;
            });
        }
    }
})(angular.module('PoliticianList'));