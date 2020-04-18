/**
 * Arquivo Controller em angular.
 * @author Samael Pereira Simões
 */

app.controller('ProdutoCRTL', ['$scope', '$http', '$log','$rootScope', '$location', 'toastr', 'TpProdutoServiceAdd',  'AddProductService', 'ProdutoServiceAdd', 'SearchProductService', '$timeout',
			  function($scope, $rootScope, $location, $http, $log, toastr, TpProdutoServiceAdd,  AddProductService, ProdutoServiceAdd, SearchProductService, timeout) {
				
	$scope.tp_produts = [];

	$scope.addProduct = function( product ) {
		debugger;
		AddProductService.query(product, function(success){	
			$scope.toastr(success["status"], success["mensagem"]);	
			
		}, function(err) {
			toastr.error("ocorreu erro no servidor, se continuar entrar em contato com o administrador ");
			console.log(err);
		})
	}	

	$scope.addTpProduct = function( val ) {
		TpProdutoServiceAdd.query(val, function(success) {	
			$scope.toastr(success["status"], success["mensagem"]);	
		}, function(err){
			toastr.error("ocorreu erro no servidor, se continuar entrar em contato com o administrador ");
			console.log(err)
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

	$scope.searchProduct = function(listallpes, busca) {
		var html = "<table id='tabela' class='tablesorter table table-responsive custom-table-margin-b'>";		
		html += 
			"<thead class='table table-striped '>" +
				"<tr>" +	
					"<th> Produto </th>" + 
					"<th> Valor </th>" +
					"<th> Tipo de produto </th> " +	
					"<th  style='width: 13%;'> Descrição </th> " +						
				"</tr>" +
			"</thead>" +					
			"<tbody>";
		    if(listallpes != undefined && listallpes.length > 0 && listallpes[0].id != undefined){
			  	for(var i = 0; i < listallpes.length; i++){
					html += "<tr>";					
						html += "<td>" + listallpes[i].nome + "</td>";
				
						if (listallpes[i].tipo == 2) {
							html += "<td>" + listallpes[i].cnpj + "</td>";
						}else if (listallpes[i].tipo  == 1){
							html += "<td>" + listallpes[i].cpf + "</td>";
						}
						
						if (listallpes[i].tipo == 1) {
							html += "<td>" + "PF" + "</td>";
						}else if (listallpes[i].tipo == 2) {
							html += "<td>" + "PJ" + "</td>";
						}				
										
					html += "</tr>";  
			    }
		    }else{
			    if(listallpes == undefined || (listallpes != undefined && listallpes.length > 0)){

					if(busca == "" || busca == undefined){						
						busca = "*";
					}
					SearchProductService.query('', function (products) {
						$scope.searchProduct('',products);
					}, function(err) {
						toastr.error("ocorreu erro no servidor, se continuar entrar em contato com o administrador");
						console.log(err);
					})					
				}else{					
					html += "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
				}
		    }
		html += "</tbody>";		
		html +="</table>";
		$("#resupsall").html(html);		
	}

	$scope.toastr = function(value, mensagem) {
		
		if (value == "success") {
			toastr.success(mensagem);
		}
		if (value == "warning") {
			toastr.warning(mensagem);
		}
		if(value == "error") {
			toastr.error(mensagem);
		}
	}

	$scope.searchProduct();
}])