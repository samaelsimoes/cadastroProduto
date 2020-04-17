app.factory('LoginService', function($resource) {
	return $resource('webapp/project/resource/login/backend/login.php/', null, {
		query:{
			method: 'GET'
		}
    });
});