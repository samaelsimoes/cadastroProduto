/**
* Arquivo service Logout em angular.
* @author Samael Pereira Simões
*/
app.factory('LogoutService', function($resource) {
	return $resource('/', null, {
		
			method: 'GET'
		
	});
});