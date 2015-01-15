var rootScope = null;

app.run(function($injector)
{
    rootScope = $injector.get('$rootScope');
});

app.config(function($routeProvider, $locationProvider) {

	var redirect_if_logged = function(){
		if(rootScope.current_user){
			return '/';
		}
	};
	$routeProvider
		.when('/register', {
			templateUrl: 'templates/register_form.html',
			controller: 'RegisterFormCtrl',
			redirectTo: redirect_if_logged
		})
		.when('/login', {
			templateUrl: 'templates/login_form.html',
			controller: 'LoginFormCtrl',
			redirectTo: redirect_if_logged
		})
		.when('/', {
			templateUrl: function(){
				if(rootScope.current_user){
					return 'templates/main_logged.html';
				}
				return 'templates/main_not_logged.html';
			},
			reloadOnSearch: true
		})

	$locationProvider.html5Mode(true);
});