<h2><?= $title ?></h2>
<html ng-app="app">
<head>
	
</head>
<body>
	<div ng-controller="decontroller">

		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>city</th>	
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="n in list_data">
					<td>{{n.id}}</td>
					<td>{{n.name}}</td>
					<td>{{n.city}}</td>
				</tr>
			</tbody>
		</table>
		
	</div>
	<script src="<?=base_url();?>assets/js/angular.min.js"></script>
	<script type="text/javascript">
		var app = angular.module('app', []);
		app.controller('decontroller', function($scope, $http) {
			$scope.list_data = [];

			$scope.getData = function() {
				console.log('clicked');
			}

			$http.get("angular_test/ajax_load_data").then(function(response) {
				$scope.list_data = response.data;
			}, function(response) {
				//err
				console.log(response);
			});
		});
	</script>
</body>
</html>