app.controller('MainController', 
	['$rootScope', '$scope', '$http', '$location', '$route', '$resource', 'User',
	function ($rootScope, $scope, $http, $location, $route, $resource, User) {	

		if(sessionStorage.auth_key){
			$rootScope.current_user = new User();
		}
}]);