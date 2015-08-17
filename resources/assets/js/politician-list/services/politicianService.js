(function (module) {
    'use strict';

    module.factory('politicianService', service);

    service.$inject = ['$http'];

    function service($http){
        return {
            getList: function() {
                return $http.get('/api/politicians/get-list');
            }
        }
    }
})(angular.module('PoliticianList'));