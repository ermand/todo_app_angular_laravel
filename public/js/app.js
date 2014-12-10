angular.module('ToDo', []).
controller('todoController', ['$scope', '$http', function($scope, $http) {
    $http.get('/api/todos').success(function(todos) {
       $scope.todos = todos;
    });
}])
