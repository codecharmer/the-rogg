(function (module) {
    'use strict';

    module.directive('politicianList', politicianList);

    function politicianList() {
        return {
            templateUrl: '/assets/templates/politician-list/politician-list.html',
            restrict: 'E',
            controller: Controller,
            scope: {}
        }
    }

    function Controller() {

    }
})(angular.module('PoliticianList'));