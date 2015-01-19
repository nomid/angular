app.controller('RegisterFormCtrl', ['$scope', '$http', 'User', '$location', function ($scope, $http, User, $location) {
	
	$scope.user = new User();
	
	$scope.register = function(){
		$http.post('user/create', { user: $scope.user })
			.success(function(data, status, headers, config){
				if(data.status == 'ok'){
					$location.path('/');
				}
			});
	}
}])