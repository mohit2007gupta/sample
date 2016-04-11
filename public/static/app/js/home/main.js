var elementapp = angular.module('mainApp',[])
    .controller('mainController',["$scope","article",function($scope,article) {
        $scope.abc = "jell";
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
