<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ng repeat</title>
	<script src="http://localhost/angular/angular.js"></script>
</head>
<body id="body_id" ng-app="" ng-init='countries = [{"name":"India"},{"name":"Pakistan"},{"name":"German"}]'>
	<span ng-bind="countries"></span>
	<ul>
		<li ng-repeat="(key, country) in countries" title="{{ key }}">
			{{ 'Country Name = ' + country.name }}
		</li>
	</ul>
</body>
</html>