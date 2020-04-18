app.factory('TpProdutoServiceAdd', function($resource) {
	debugger;
	return $resource('backend/addTpProd.php/', null, {
		query:{
			method: 'POST'
		}
    });
});