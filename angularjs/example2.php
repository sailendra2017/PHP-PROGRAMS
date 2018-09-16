<script type="text/javascript" src="angular.min.js"></script>
<script type="text/javascript">
	var app = angular.module('myapp',[]);
	app.controller('myctrl',function($scope){
		$scope.stuname = 'LIT';
	})
</script>
<div ng-app="myapp" ng-controller="myctrl">
	<p>Name:<input type="text" name="stuname" ng-model="stuname"></p>
	<p><h1>Hello <span>{{stuname}}</span></h1></p>
</div>