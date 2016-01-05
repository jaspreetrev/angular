<!doctype html>
<html ng-app>
<head>
	<script src="http://localhost/angular/angular.js"></script>
</head>
<body>
	<div>
		<label>Name:</label>
		<input type="text" ng-model="yourName" placeholder="Enter a name here">
		<hr>
		<h1>Hello {{yourName}}!</h1>
		<p>This came from ng-bind <span ng-bind="yourName"></span></p>
	</div>
	<script type="text/javascript">
		var cars = ["Saab", "Volvo", "BMW"];
		console.log( cars.slice(-1)[0] );
	</script>
</body>
</html>