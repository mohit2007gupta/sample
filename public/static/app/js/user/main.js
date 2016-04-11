var elementapp = angular.module('mainApp', [])
    .controller('mainController', ["$scope","user", function ($scope, user) {

        $scope.getUser = function (id) {
                user.getUser(id).then(function (data) {
                    if (data.status == true) {
                        $scope.model = data.data;
                    }
                    else {
                        window.location = baseUrl + 'home';
                    }
                });
        };
        user.getCurrentUser().then(function(data){
            $scope.user = data.data;
            console.log(data.data);

        });
        $scope.getUser(userId);
        user.getUserArticles(userId).then(function (data) {
            console.log(data.data)
            $scope.articles = data.data;
        });
        // $scope.getCurrentUser();
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
            getUser: function (id) {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/getUser/"+id;
                console.log(urlToUse);
                $http.get(urlToUse).success(function (data) {
                    deferred.resolve(data);
                }).error(function (data) {
                    deferred.reject();
                });
                return deferred.promise;
            },
            getUserArticles: function (id) {
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
