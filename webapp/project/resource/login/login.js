/**
* Arquivo Login em angular.
* @author Samael Pereira Simões
*/

app.controller('LoginController', [ '$scope', '$rootScope', '$location', 'toastr', 'LoginService',
								  function( $scope,  $rootScope,  $location, toastr, LoginService ) {
	
	$rootScope.activetab = $location.path();
	
	$scope.auth = function( user ) {
			debugger;
        if(user.login == undefined | user.password == undefined) {
            $scope.validationAuthentication("Login ou senha invalido!");
		}else if (user != undefined ) {
			debugger;
			LoginService.query(user, function(success){	

                toastr.success(success.msg);
                
                window.setTimeout(function() {
                    $('#search').addClass('custom-search');
                    $('#modal').modal('close');
                }, 2000);		   			
                
                window.setTimeout(function() {	
                    clearInterval(window.setInterval(function() {	}, 50));
                        //alert("deu certo");
                        $(location).attr('href', 'webapp/project/private/home.html#!/productgrid');
                }, 2000);               	  
                
			}, function(err){
				validationAuthentication(err.data.msg);			
			})
		}
	}	
	$scope.validationAuthentication = function(err){
		toastr.warning(err);
		window.setTimeout(function() {
			$('#modal').modal('close');
		}, 2000);
	}
}]);

