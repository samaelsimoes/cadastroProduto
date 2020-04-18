/**
 * Arquivo Service Centro de custo  em angular.
 * @author Samael Pereira Simões
 */

app.factory('AddProductService', function($resource) {
	return $resource('backend/addProduct.php/', null, {
		query:{
			method: 'GET'
		}
	});
});

