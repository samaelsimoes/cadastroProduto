<?php 
   // require("backend/validaAutenticacao.php");
   $path = dirname(__FILE__) . '\backend\\'. "validaAutenticacao.php";

   include($path);

?>

<!DOCTYPE html>
<html ng-app="appHome">
    <head>
        <meta charset="utf-8" />
        <title>Cadastro de produto</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../../../webapp/lib/node_modules/materialize-css/dist/css/materialize.css" rel="stylesheet" type="text/css"/>
        <link href="../../../webapp/lib/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../../../webapp/lib/css/angular-toastr.css" rel="stylesheet" type="text/css"/>
        <link href="../../../webapp/lib/node_modules/angular-ui-grid/ui-grid.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>      
    <section>
		<nav class="nav custom-color-menu darken-1">
		    <div class="custom-header">
		    	<div class="custom-fontes-nave">		    
		    		<div class="row">		    					    			 			
		    			<div class="col s4 custom-padding-header">	 	
		    						 
		    				<a href="#!/expensegrid">SoftExpert - Sistema de produtos</a>		    				
		    			</div>		 
		    			<div class= "col s4">
		    				<a href="#!/expensegrid" data-activates="slide-out" class="button-collapse hide-on-large-only">
		    				
		    					<i class="material-icons custom-icones">menu</i>
		    				</a>   
		    			</div>	     		
		    		</div>			
			     </div>
		    </div>
	  	</nav>
	</section>
	<section>
		<div id="container" class="row">
			<div id="menu">
				<ul id="slide-out" class="side-nav custom-menu-top fixed show-on-larged-only custom-menu-top">
				 	<li ng-class="{active: activetab == '#!/produto'}" >
                        <a class="dropdown-button active" href="#!/produto" data-activates="dropdown1">Produto
                        <i class="material-icons">description</i>
                    </a>
                    </li>
                    <li ng-class="{active: activetab == '#!/imposto'}">
                        <a class="dropdown-button active" href="#!/imposto" data-activates="dropdown1">Imposto
                        <i class="material-icons">account_balance</i>
                    </a>
                    </li> 	  
                    <li ng-class="{active: activetab == '#!/usergrid'}">
                        <a class="dropdown-button active" href="#!/usergrid" data-activates="dropdown1">usuario
                            <i class="material-icons">account_circle</i>
                        </a>
                    </li>
					<li ng-controller="LogoutController">
						<a ng-submit="reload()" class="dropdown-button active" href="" data-activates="dropdown1" ng-click="reload()">Sair	
							<i class="material-icons">exit_to_app</i>
						</a>
					</li>
				</ul>
			</div>	
            <div id="index">		
                <div ng-view class="custom-margin-private"> </div>
            </div>
				
		</div>
	</section>   
    </body>

    <!-- Libraris js -->	
    <script src="../../../webapp/lib/node_modules/jquery/dist/jquery.js" type="text/javascript"></script>
    <script src="../../../webapp/lib/js/jquery-ui.js" type="text/javascript"></script>
    <script src="../../../webapp/lib/node_modules/angular/angular.js" type="text/javascript"></script>

    <script src="../../../webapp/lib/node_modules/angular-route/angular-route.js" type="text/javascript"></script>
    <script src="../../../webapp/lib/node_modules/angular-resource/angular-resource.js" type="text/javascript"></script>
    <script src="../../../webapp/lib/node_modules/angular-animate/angular-animate.js" type="text/javascript"></script>	
    <script src="../../../webapp/lib/node_modules/angular-touch/angular-touch.js" type="text/javascript"></script>
    <script src="../../../webapp/lib/node_modules/angular-messages/angular-messages.min.js" type="text/javascript"></script>	
    <script src="../../../webapp/lib/node_modules/angular-ui-grid/ui-grid.js" type="text/javascript"></script>

    <script src="../../../webapp/lib/js/angular-toastr.js" type="text/javascript"></script>
    <script src="../../../webapp/lib/node_modules/angular-input-masks/src/angular-input-masks.br.js" type="text/javascript"></script>
    <script src="../../../webapp/lib/js/angular-input-masks-standalone.min.js" type="text/javascript">	</script>	
    <script src="../../../webapp/lib/node_modules/materialize-css/dist/js/materialize.js" type="text/javascript"></script>
    <script src="../../../webapp/lib/node_modules/angular-materialize/src/angular-materialize.js" type="text/javascript"></script>

    <!-- application -->
    <script src="app.js" type="text/javascript"></script>
            
    <!-- Services -->
    <script src="service/logoutService.js" type="text/javascript"></script>
    <script src="service/produtoService.js" type="text/javascript"></script>
    <script src="service/tpProdService.js" type="text/javascript"></script>
    <script src="service/addProductService.js" type="text/javascript"></script>
    <script src="service/searchProductService.js" type="text/javascript"></script>
     
    <!--  controllers -->	
    <script src="controller/logoutController.js" type="text/javascript"></script>
    <script src="controller/produtoCRTL.js" type="text/javascript"></script>

</html>