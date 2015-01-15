app.controller('RegisterFormCtrl', ['$scope', '$http', 'User', '$location', function ($scope, $http, User, $location) {
	$scope.test = 'its register controller';
	$scope.user = new User();
	$scope.register = function(){
		$scope.user.$save();
		$location.path('/');
	}
}])