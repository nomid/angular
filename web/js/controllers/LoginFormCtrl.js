app.controller('LoginFormCtrl', 
	['$scope', '$rootScope', '$http', '$location', 'User', 
	function ($scope, $rootScope, $http, $location, User) {
	
	$scope.login = function(){
		$http.post('auth', { user: $scope.login_data })
			.success(function(data, status, headers, config){
				if(data.status == 'ok'){
					$rootScope.current_user = new User();
					$location.path('/');
				}
			});
	}
}]);