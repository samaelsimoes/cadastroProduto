/**
 * Arquivo Service Centro de custo  em angular.
 * @author Samael Pereira Simões
 */

app.factory('SearchProductService', function($resource) {
	return $resource('backend/searchProduct.php/', null, {
		query:{
			method: 'GET'
		}
	});
});

