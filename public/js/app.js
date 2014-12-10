angular.module('ToDo', []).
controller('todoController', ['$scope', '$http', function($scope, $http) {
    $http.get('/api/todos').success(function(todos) {
       $scope.todos = todos;
    });

    $scope.remaining = function () {
        var count = 0;

        angular.forEach($scope.todos, function(todo) {
            count += todo.completed ? 0 : 1;
        });

        return count;
    }
}])
