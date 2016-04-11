var elementapp = angular.module('mainApp', [])
    .controller('mainController', ["$scope","article", function ($scope, article) {
        $scope.model = {};
        $scope.model.contributors = [];
        $scope.addContributor = function () {
            console.log('asd');
            $scope.model.contributors.push('');
        };
        $scope.createArticle = function () {
            if ($scope.model.title != '' && $scope.model.content != '')
            {
                article.createArticle($scope.model).then(function (data) {
                        if (data.status == true) {
                            window.location = baseUrl + 'articles/'+data.data.id;
                        }
                });
            }
        };
    }])
    .factory('article', ["$location", "$http", "$log", "$q", function ($location, $http, $log, $q) {
        return {
            createArticle: function (article) {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/createArticle";
                console.log(urlToUse);
                $http.post(urlToUse, article).success(function (data) {
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
            }
        }
    }]);
