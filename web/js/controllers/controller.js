app.controller('mainController', 
	['$scope', '$http', '$location', '$route', '$resource', 'User',
	function ($scope, $http, $location, $route, $resource, User) {

		var user = new User('test test');
		$scope.user = user;
		console.log(user);
		
		$scope.test = 'its test from controller';

		//test $http
		$http.get('/test')
			.success(function(data, status, headers, config){
				console.log('response data: '+data);
			});

		//test $location
		console.log('absUrl: ' + $location.absUrl());

		//test $route
		// console.log($route);
		console.log('routes: ' + $route.routes);

		//test $resource
		// console.log($resource);
		// $scope.test2 = function(){
		// 	$http.get('/test')
		// 		.success(function(data, status, headers, config){
		// 			console.log(data);
		// 		});
		// }
		$scope.method = function(){
			console.log('its method');
		}
}]);