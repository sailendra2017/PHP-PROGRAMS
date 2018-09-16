<style type="text/css">
	table, th, td{
		border:1px solid grey;
		border-collapse:collapse;
		padding:5px;
	}
	table tr:nth-child(odd)
	{
		background-color:#f1f1f1;
	}
		table tr:nth-child(even)
	{
		background-color:#ffffff;
	}
</style>
<script type="text/javascript" src="angular.min.js"></script>
<div ng-app="myApp" ng-controller="customersCtrl">
	<table border="1" width="100%">
		<tr ng-repeat="x in names">
			<td>{{x.Name}}</td>
			<td>{{x.Country}}</td>
		</tr>
	</table>
</div>
<script type="text/javascript">
	var app = angular.module('myApp',[]);
	app.controller('customersCtrl',function($scope, $http){
		$http.post('customers.php').success(function(response){
			$scope.names = response.records;
			
		});	
	});		
</script> 
