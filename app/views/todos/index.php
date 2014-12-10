<!DOCTYPE html>
<html lang="en" ng-app="ToDo">
<head>
    <meta charset="UTF-8">
    <title>ToDo App</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
<div ng-controller="todoController" class="container">
    <div class="col-md-6">
        <h3 class="page-header"> My ToDos </h3>

        <div class="row">
            <ul class="list-group">
                <li class="list-group-item" ng-repeat="todo in todos">
                    <input type="checkbox" ng-model="todo.completed" />
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
