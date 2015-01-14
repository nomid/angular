app.factory('Product', [function () {
	function Product(name){
		if(name){
			this.setName(name);
		}
	};

	Product.prototype = {
		
	};
	
	return Product;
}])