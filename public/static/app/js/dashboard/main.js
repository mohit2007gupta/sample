var elementapp = angular.module('mainApp',[])
    .controller('mainController',["$scope","user",function($scope, user) {
        $scope.capitalizeFirstLetter = function (string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        };
        $scope.abc = "jell";
        user.getCurrentUser().then(function(data){
            $scope.user = data.data;
            console.log(data.data);
        })
    }])
    .factory('user', ["$location", "$http", "$log", "$q", function ($location, $http, $log, $q) {
        return {
            getCurrentUser: function () {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/getCurrentUser";
                console.log(urlToUse);
                $http.get(urlToUse).success(function (data) {
                    deferred.resolve(data);
                }).error(function (data) {
                    deferred.reject();
                });
                return deferred.promise;
            },
            getCurrentUserArticles: function () {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/getCurrentUserArticles";
                console.log(urlToUse);
                $http.get(urlToUse).success(function (data) {
                    deferred.resolve(data);
                }).error(function (data) {
                    deferred.reject();
                });
                return deferred.promise;
            },
            getUserArticles: function ($id) {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/getUserArticles/"+id;
                console.log(urlToUse);
                $http.get(urlToUse).success(function (data) {
                    deferred.resolve(data);
                }).error(function (data) {
                    deferred.reject();
                });
                return deferred.promise;
            }
        }
    }]);