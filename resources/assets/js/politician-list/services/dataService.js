(function (module) {
    'use strict';

    module.factory('dataService', service);

    service.$inject = ['$http'];

    function service($http) {
        return {
            getAll: function () {
                return $http.get('/api/data/get-all');
            }
        }
    }
})(angular.module('PoliticianList'));