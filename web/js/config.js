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
		},
		redirect_if_not_logged = function(){
			if(!rootScope.current_user){
				return '/login';
			}
		};
		
	$routeProvider
		.when('/register', {
			templateUrl: 'templates/user/new.html',
			controller: 'RegisterFormCtrl',
			redirectTo: redirect_if_logged
		})
		.when('/login', {
			templateUrl: 'templates/login/login_form.html',
			controller: 'LoginFormCtrl',
			redirectTo: redirect_if_logged
		})
		.when('/product', {
			templateUrl: 'templates/product/new.html',
			controller: 'ProductCtrl',
			redirectTo: redirect_if_not_logged
		})
		.when('/', {
			templateUrl: function(){
				if(rootScope.current_user){
					return 'templates/main_logged.html';
				}
				return 'templates/main_not_logged.html';
			}
		})

	$locationProvider.html5Mode(true);
});