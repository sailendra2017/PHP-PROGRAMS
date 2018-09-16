<script type="text/javascript" src="angular.min.js"></script>
<div ng-app="myapp" ng-controller="myctrl">
	First Name : <input type="text"  ng-model="firstName"><br>
	Last Name : <input type="text"  ng-model="lastName"><br><br>
	Full Name : {{firstName+" "+lastName}}
</div>
<script type="text/javascript">
	var app = angular.module('myapp',[]);
	app.controller('myctrl',function($scope){
		$scope.firstName = 'LIT';
		$scope.lastName = 'Susanta K Rout';
	})
</script> 