var elementapp = angular.module('mainApp',[])
    .controller('mainController',["$scope","user","article",function($scope, user, article) {
        $scope.capitalizeFirstLetter = function (string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        };
        $scope.abc = "jell";
        user.getCurrentUser().then(function(data){
            $scope.user = data.data;
            $scope.user.level.name = $scope.capitalizeFirstLetter($scope.user.level.name);
            console.log(data.data);
            user.getCurrentUserContributions().then(function(data){
                $scope.user.contributions = data.data;
                console.log(data.data);
            });
        });

        $scope.getAllArticles = function () {
            article.getAllArticles().then(function (data) {
                if (data.status == true) {
                    $scope.articles = data.data;
                    console.log(data)
                }
                else {
                    window.location = baseUrl + 'home'
                }
            });
        };
        $scope.getAllArticles();

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
            getCurrentUserContributions: function () {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/getCurrentUserContributions";
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
    }])
    .factory('article', ["$location", "$http", "$log", "$q", function ($location, $http, $log, $q) {
        return {
            getAllArticles: function () {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/getAllArticles/";
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