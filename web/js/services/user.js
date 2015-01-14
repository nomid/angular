app.factory('User', [function () {
	function User(name){
		if(name){
			this.setName(name);
		}
	};

	User.prototype = {
		name: 'test name',
		setName: function(name){
			this.name = name;
		}
	};
	
	return User;
}])