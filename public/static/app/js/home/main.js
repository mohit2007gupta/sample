var elementapp = angular.module('mainApp',[])
    .controller('mainController',["$scope",function($scope) {
        $scope.abc = "jell";
        user.getArticles().then(function(data)){
            
        }
    }]);