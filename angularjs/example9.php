<script type="text/javascript" src="angular.min.js"></script>
<div ng-app="myapp" ng-controller="myctrl">
	Fno : <input type="text"  ng-model="f"><br>
	Sno : <input type="text"  ng-model="s"><br><br>
	<input type="button" value="add" ng-click="add()"><br>
	{{r}}
</div>
<script type="text/javascript">
	var app = angular.module('myapp',[]);
	app.controller('myctrl',function($scope){
		$scope.add = function(){
			$scope.r = parseInt($scope.f)+ parseInt($scope.s)
		}
	});
</script> 