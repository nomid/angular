app.controller('MainController', 
	['$rootScope', '$scope', '$http', '$location', '$route', '$resource', 'User', '$cookies',
	function ($rootScope, $scope, $http, $location, $route, $resource, User, $cookies) {	
		var user = new User;
			user.get_by_access_token('rXBPAOdrmIrlcXzGGehT9uPXYBOY55U1');
		if($cookies.access_token){
			var user = new User;
			user.get_by_access_token($cookies.access_token);
			$rootScope.current_user = user;
		}
}]);