var app = angular.module('appHome',['ngAnimate', 'ngTouch', 'ui.grid.selection', 'ui.grid.exporter', 'ui.grid', 'ui.grid.pagination', 'ui.grid.cellNav', 'ui.grid.expandable',
	 'ui.grid.edit', 'ui.grid.rowEdit', 'ui.grid.saveState', 'ui.grid.resizeColumns', 'ui.grid.pinning', 'ui.grid.moveColumns', 'ui.utils.masks',
	 'ui.grid.infiniteScroll', 'ui.grid.importer', 'ui.grid.grouping', 'ui.materialize', 'toastr', 'ngResource', 
	 'ngRoute', 'ngTouch']); 
app.pathRest = 'rest';
app.config(function($routeProvider, $locationProvider){
	
    // remove o # da url
	$locationProvider.html5Mode({		
		enabled: false,
	  	requireBase: false
	});    
	 
	$routeProvider
	
   .when('#!/home', {	
    	templateUrl: '/home.html/',
    }) 
    .when('/produto', {	   
    	templateUrl: 'produto.php',
      	controller: 'ProdutoCRTL',
	}) 
	.when('/cadastroTipoProduto', {	   
    	templateUrl: 'cadastroTipoProduto.html',
      	controller: 'cadastroTipoProdutoCRTL',
    })
});



