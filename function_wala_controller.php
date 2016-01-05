<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="http://localhost/angular/angular.js"></script>
</head>
<body><?php  ?>
	<div ng-app="app">
		<div ng-controller="function_wala_controller">
			Enter first name : <input type="text" ng-model="student.first_name"><br>
			Enter last name : <input type="text" ng-model="student.last_name"><br>
			Enter Fee : <input type="text" ng-model="student.fee"><br>
			<span ng-bind="student.full_name() | uppercase"></span><br>
			<span ng-bind="student.fee*5 | currency"></span><br>
		</div>
	</div>
	<script type="text/javascript">
	angular.module('app', [])
	.controller('function_wala_controller', function($scope){
		$scope.student = {
			first_name : 'Jatin',
			last_name  : 'Verma',
			fee		   : '100',
			full_name  : function() {
				var full_name_ob = $scope.student;
				return full_name_ob.first_name+' '+full_name_ob.last_name;
			}
		};
	});
	
	
	</script>
</body>
</html>