angular.module('ToDo', []).
controller('todoController', ['$scope', function($scope) {
    $scope.todos = [
        { 'title': 'Do exercises', completed: false},
        { 'title': 'Read a new book', completed: false},
        { 'title': 'Learn new technologies', completed: false},
        { 'title': 'Angular Rocks', completed: false},
    ];
}])