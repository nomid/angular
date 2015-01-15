app.controller('LoginFormCtrl', ['$scope', '$http', '$location', function ($scope, $http, $location) {
	
	$scope.login = function(){
		console.log($scope.login_data);
		$http.post('auth', { user: $scope.login_data })
			.success(function(data, status, headers, config){
				if(data.status == 'ok'){
					sessionStorage.auth_key = data.hash;
					$location.path('/');
				}
			});
	}
}]);