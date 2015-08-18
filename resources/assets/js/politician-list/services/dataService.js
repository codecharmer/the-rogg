(function (module) {
    'use strict';

    module.factory('dataService', service);

    service.$inject = ['$http'];

    function service($http) {
        return {
            getStates: function () {
                return $http.get('/api/data/get-states');
            },
            getParties: function () {
                return $http.get('/api/data/get-parties');
            }
        }
    }
})(angular.module('PoliticianList'));