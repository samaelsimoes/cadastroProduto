app.controller('newUserController', [ '$scope', '$rootScope', '$location', 'toastr', 'NewUserService',
								  function( $scope,  $rootScope,  $location, toastr, NewUserService ) {
	
	$rootScope.activetab = $location.path();
	
	$scope.newUserLogin = function( user ) {

        let msg = "";
        msg += $scope.val("Campo Login ", user.login);
        msg += $scope.val("Campo Senha ", user.login);
        msg += $scope.val("Campo Nome ", user.nome);

        if ( msg ) {
            toastr("warning", msg);
        } else {
            NewUserService.query(user, function(success){	
                
                $scope.toastr(success["status"], success["mensagem"]);	
            
                window.setTimeout(function() {
                    $('#modal2').modal('close');
                }, 2000);		   	
                        
            }, function(err){
                    toastr.error("ocorreu erro no servidor, se continuar entrar em contato com o administrador");
            })
        }
	}	
    
    $scope.val = function(campo, valor){
		var msg = "";
		if(valor == null ||  valor.trim() == ""){
			msg += " O campo: " + campo + " Está Vazio. </br>";
		}
		return msg;
	};

	$scope.toastr = function(value, mensagem) {		
		if (value == "success") {
			toastr.success(mensagem);
		}
		if (value == "warning") {
			toastr.warning(mensagem);
		}
	}
}]);

