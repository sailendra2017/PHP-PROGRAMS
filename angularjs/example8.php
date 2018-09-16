<script type="text/javascript" src="angular.min.js"></script>
<div ng-app="" ng-init="names=[
						{name:'Jani',country:'Norway'},
						{name:'Hege',country:'Sweden'},
						{name:'Kai',country:'Denmark'}]">
	<ul>
		<li ng-repeat="x in names">
			{{x.name + ', '+x.country}}
		</li>
	</ul>
</div>
