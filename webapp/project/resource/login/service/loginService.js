
app.factory('LoginService', function($resource) {
	return $resource('webapp/backend/rest.php/', null, {
		query:{
			method: 'GET'
		}
    });
});