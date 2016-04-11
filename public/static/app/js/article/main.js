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
                            window.location = baseUrl + 'article/'+data.data.id;
                        }
                });
            }
        };
        $scope.editArticle = function () {
            if ($scope.model.title != '' && $scope.model.content != '')
            {
                article.editArticle($scope.model).then(function (data) {
                    if (data.status == true) {
                        window.location = baseUrl + 'article/'+data.data.id;
                    }
                });
            }
        };
        $scope.getArticle = function (id) {
                article.getArticle(id).then(function (data) {
                    if (data.status == true) {
                        $scope.model = data.data;
                    }
                    else {
                        window.location = baseUrl + 'home';
                    }
                });
        };
        if (typeof articleId !== 'undefined'){
            $scope.getArticle(articleId);
        }
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
            editArticle: function (article) {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/editArticle";
                console.log(urlToUse);
                $http.post(urlToUse, article).success(function (data) {
                    deferred.resolve(data);
                }).error(function (data) {
                    deferred.reject();
                });
                return deferred.promise;
            },
            getArticle: function (id) {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/getArticle/"+ id;
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
