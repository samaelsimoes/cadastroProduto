/**
* Arquivo Login em angular.
* @author Samael Pereira Simões
*/

app.controller('LoginController', [ '$scope', '$rootScope', '$location', 'toastr', 'LoginService',
								  function( $scope,  $rootScope,  $location, toastr, LoginService ) {
	
	$rootScope.activetab = $location.path();

	$scope.auth = function( user ) {
       
		LoginService.query(user, function(success){	
			
			$scope.toastr(success["status"], success["mensagem"]);	
		
			window.setTimeout(function() {
				$('#search').addClass('custom-search');
				$('#modal').modal('close');
			}, 2000);		   	
					
			if (success["status"] == "success") {
				window.setTimeout(function() {	
					clearInterval(window.setInterval(function() {	}, 50));
						$(location).attr('href', 'webapp/project/private/home.php');
				}, 2000);     	  
			}
		}, function(err){
				toastr.error("ocorreu erro no servidor, se continuar entrar em contato com o administrador");
		})
		
	}	
	
	$scope.toastr = function(value, mensagem) {
		
		if (value == "success") {
			toastr.success(mensagem);
		}
		if (value == "warning") {
			toastr.warning(mensagem);
		}
	}
}]);

