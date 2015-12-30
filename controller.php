<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="http://localhost/angular/angular.js"></script>
</head>
<body ng-app="my_app">
	<div ng-controller='custom_controller'>
		{{ helloTo.title }}
	</div>
	<div ng-controller="testController">
		{{ greeting }}
	</div>
	<script type="text/javascript">
		angular.module('my_app', [])
		.controller('custom_controller', function($scope){
			$scope.helloTo = {};
			$scope.helloTo.title = 'Hello from angular.';
		})
		.controller('testController', ['$scope', function($scope){
			$scope.greeting = 'hello from test controller!!';
		}]);
		
	</script>
</body>
</html>