app.config(function($routeProvider, $locationProvider) {
	$routeProvider
		.when('/register', {
			templateUrl: 'templates/register_form.html',
			controller: 'RegisterFormCtrl'
		})
		.when('/login', {
			templateUrl: 'templates/login_form.html',
			controller: 'LoginFormCtrl',
			redirectTo: function(){
				if(sessionStorage.auth_key){
					return '/';
				}
			}
		})
		.when('/', {
			redirectTo: function(){
				if(!sessionStorage.auth_key){
					return '/login';
				}
			}	
		})

	$locationProvider.html5Mode(true);
});