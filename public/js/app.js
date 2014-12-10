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

    $scope.addTodo = function () {
        var newTodo = {
            title: $scope.newTodo,
            completed: false
        }

        $scope.todos.push(newTodo);

        $http.post('/api/todos', newTodo);
    }

    $scope.completeTodo = function (event, todoId) {
        console.log(event);
        console.log(todoId);

        var status = {
            completed: event
        }

        $http.post('/api/todos/' + todoId, status);
    }
}])
