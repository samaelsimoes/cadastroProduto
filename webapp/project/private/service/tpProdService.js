app.factory('TpProdutoServiceAdd', function($resource) {
	return $resource('backend/addTpProd.php/', null, {
		query:{
			method: 'GET'
		}
    });
});