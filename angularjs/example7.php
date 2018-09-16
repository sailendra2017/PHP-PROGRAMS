<script type="text/javascript" src="angular.min.js"></script>
<div ng-app="" ng-init="names=['Jani','Hage','Kai']">
<ul>
	<li ng-repeat="x in names">
		{{x}}
	</li>
</ul>
</div>
