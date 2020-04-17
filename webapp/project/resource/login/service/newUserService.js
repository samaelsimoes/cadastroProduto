app.factory('NewUserService', function($resource) {
	return $resource('webapp/project/resource/login/backend/newUser.php/', null, {
		query:{
			method: 'GET'
		}
    });
});

