<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ng repeat</title>
	<script src="http://localhost/angular/js/angular.js"></script>
</head>
<body id="body_id" ng-app="" ng-init='countries = [{"name":"India"},{"name":"Pakistan"},{"name":"German"}]'>
	<span ng-bind="countries"></span>
	<ul>
		<li ng-repeat="(key, country) in countries" title="{{ key }}">
			{{ 'Country Name = ' + country.name }}
		</li>
	</ul>

	<hr>

	<?php 
		$variable = array( array('this_name' => 'jatin', 'this_name1' => 'jatin1'), 'manish', 'hitesh' );
		echo "<pre>";
		print_r($variable);
		echo "</pre>";
		echo '<hr>';
		echo "<pre>";
		echo json_encode($variable);
		echo "</pre>";
	?>
</body>
</html>