app.factory('User', ['$resource', function ($resource) {
	function User(id){
		var resource = $resource('/users/:userId', {userId: '@id'});
		if(id){
			return new resource.get({userId: id});
		}
		return new resource()
	};

	User.prototype = {
		register: function(){
			console.log(this.resource);
		}
	};
	
	return User;
}])