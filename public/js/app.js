angular.module('ToDo', []).
controller('todoController', ['$scope', '$http', function($scope, $http) {

    /**
     * Get todos via API.
     *
     * @type object
     */
    $http.get('/api/todos').success(function(todos) {
       $scope.todos = todos;
    });

    /**
     * Show the cound of remaining todo items.
     *
     * @return int
     */
    $scope.remaining = function () {
        var count = 0;

        angular.forEach($scope.todos, function(todo) {
            count += todo.completed ? 0 : 1;
        });

        return count;
    }

    /**
     * Add new todo item.
     */
    $scope.addTodo = function () {
        var newTodo = {
            title: $scope.newTodo,
            completed: false
        }

        $scope.todos.push(newTodo);

        $scope.newTodo = ''

        $http.post('/api/todos', newTodo);
    }

    /**
     * Complete a todo item.
     *
     * @param  boolean event
     * @param  int todoId
     */
    $scope.completeTodo = function (event, todoId) {
        console.log(event);
        console.log(todoId);

        var status = {
            completed: event
        }

        $http.post('/api/todos/' + todoId, status);
    }

    /**
     * Clear completed todo items.
     *
     * @type object
     */
    $scope.clearCompleted = function() {
        $scope.todos = $scope.todos.filter(function(item){
            return !item.completed
        });
    }
}])
