/**
 * Arquivo Service Centro de custo  em angular.
 * @author Samael Pereira Simões
 */
app.factory('TpSearchProductService', function($resource) {
	return $resource('backend/searchTpProduct.php/', null, {
		query:{
			method: 'GET'
		}
	});
});

