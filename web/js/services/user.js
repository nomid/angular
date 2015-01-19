app.factory('User', ['$http', function ($http) {
	function User(){
		
	};

	User.prototype = {
		get_by_access_token: function(access_token){
			$http.post('user/by-access-token', {access_token: access_token})
				.success(function(data){
					console.log(data);
					angular.extend(User.prototype, data.user);
				});
		}
	};
	
	return User;
}])