<!DOCTYPE html>
<html lang="en" ng-app="ToDo">
<head>
    <meta charset="UTF-8">
    <title>ToDo App</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css"/>
</head>
<body>
<div ng-controller="todoController" class="container">
    <div class="col-md-6">
        <h3 class="page-header">
            My ToDos <small ng-if="remaining()">({{ remaining() }}) remaining</small>
        </h3>

        <form name="form" ng-submit="addTodo()">
            <div class="row">
                <div class="input-group">
                    <input type="text" name="newtodo" class="form-control" ng-model="newTodo" required />
                    <span class="input-group-btn">
                        <button ng-disabled="form.$invalid" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Add</button>
                    </span>
                </div><!-- /input-group -->
            </div><!-- /.row -->
        </form>

        <hr>

        <div class="row">
            <ul class="list-group">
                <li class="list-group-item" ng-repeat="todo in todos">
                    <input type="checkbox" ng-model="todo.completed" ng-change="completeTodo(todo.completed, todo.id)" name="item_{{ todo.id }}" />
                    <span ng-class="{'completed':todo.completed}">{{ todo.title }}</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular.min.js"></script>
<script src="/js/app.js"></script>

</body>
</html>
