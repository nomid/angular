<div ng-controller="mainController" >
	<form name="MyForm" novalidate>
		<input ng-model="user.name" name="Username" type="text"  ng-pattern="/test test/">
		<input type="email" name="Email" ng-model="email" />
		<span ng-show="MyForm.Email.$invalid">wrong email</span>
		<span ng-show="MyForm.Username.$error.pattern">wrong username</span>
		<span ng-click="method()">test</span>
		<input type="submit"  value="Save" />
	</form>
</div>