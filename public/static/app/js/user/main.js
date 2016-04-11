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

        $scope.makeAdmin = function(){
            user.makeAdmin($scope.model.id).then(function (data) {
                console.log(data);
            })
        };
        $scope.removeAdmin = function(){
            user.removeAdmin($scope.model.id).then(function (data) {
                console.log(data);
            })
        };
        $scope.makeEditor = function(){
            user.makeEditor($scope.model.id).then(function (data) {
                console.log(data);
            })
        };
        $scope.removeEditor = function(){
            user.removeEditor($scope.model.id).then(function (data) {
                console.log(data);
            })
        };
        $scope.makeModerator = function(){
            user.makeModerator($scope.model.id).then(function (data) {
                console.log(data);
            })
        };
        $scope.removeModerator = function(){
            user.removeModerator($scope.model.id).then(function (data) {
                console.log(data);
            })
        };
        $scope.makeAuthor = function(){
            user.makeAuthor($scope.model.id).then(function (data) {
                console.log(data);
            })
        };
        $scope.removeAuthor = function(){
            user.removeAuthor($scope.model.id).then(function (data) {
                console.log(data);
            })
        };
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
            },
            makeAdmin: function (id) {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/makeAdmin/"+id;
                console.log(urlToUse);
                $http.get(urlToUse).success(function (data) {
                    deferred.resolve(data);
                }).error(function (data) {
                    deferred.reject();
                });
                return deferred.promise;
            },
            removeAdmin: function (id) {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/removeAdmin/"+id;
                console.log(urlToUse);
                $http.get(urlToUse).success(function (data) {
                    deferred.resolve(data);
                }).error(function (data) {
                    deferred.reject();
                });
                return deferred.promise;
            },
            makeEditor: function (id) {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/makeEditor/"+id;
                console.log(urlToUse);
                $http.get(urlToUse).success(function (data) {
                    deferred.resolve(data);
                }).error(function (data) {
                    deferred.reject();
                });
                return deferred.promise;
            },
            removeEditor: function (id) {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/removeEditor/"+id;
                console.log(urlToUse);
                $http.get(urlToUse).success(function (data) {
                    deferred.resolve(data);
                }).error(function (data) {
                    deferred.reject();
                });
                return deferred.promise;
            },
            makeModerator: function (id) {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/makeModerator/"+id;
                console.log(urlToUse);
                $http.get(urlToUse).success(function (data) {
                    deferred.resolve(data);
                }).error(function (data) {
                    deferred.reject();
                });
                return deferred.promise;
            },
            removeModerator: function (id) {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/removeModerator/"+id;
                console.log(urlToUse);
                $http.get(urlToUse).success(function (data) {
                    deferred.resolve(data);
                }).error(function (data) {
                    deferred.reject();
                });
                return deferred.promise;
            },
            makeAuthor: function (id) {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/makeAuthor/"+id;
                console.log(urlToUse);
                $http.get(urlToUse).success(function (data) {
                    deferred.resolve(data);
                }).error(function (data) {
                    deferred.reject();
                });
                return deferred.promise;
            },
            removeAuthor: function (id) {
                var deferred = $q.defer();
                var urlToUse = baseUrl + "api/v1/removeAuthor/"+id;
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
