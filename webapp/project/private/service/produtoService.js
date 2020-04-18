/**
 	* Arquivo Service Centro de custo  em angular.
	* @author Samael Pereira Simões
*/

app.factory('ProdutoServiceAdd', function($resource) {
	return $resource('webapp/project/private/backend/searchProduct.php/', null, {
		query:{
			method: 'GET'
		}
	});
});

