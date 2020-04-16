<!DOCTYPE html>
<html ng-app="app">
    <head>
        <meta charset="utf-8" />
        <title>Cadastro de produtos</title>
    </head>
    <body>      
        <section>
            <div class="custom-login custom-margin-login" ng-controller="LoginController">
                <div class="z-depth-1 grey lighten-4 row custom-login custom-width-card">
                    <form class="col s12" name="loginForm" ng-submit="auth(user)">			
                        <div class='row'>
                            <div class='col s12'>  
                                
                                <h1>Login</h1>
                            </div>
                        </div>			
                        <div class='row'>            
                            <div class='input-field col s12 custom-height-divs-card'>	                            
                                <input class='validate' type='text' name='login' id='login' ng-model="user.login" required/>
                                <label for='login'>Login</label>

                                <span class="help-block custom-fonts-alert" ng-show="loginForm.login.$error.required">Campo obrigatório!</span>
                            </div>
                        </div>			
                        <div class='row'>            
                            <div class='custom-height-divs-card input-field col s12'>			  
                                <input class='validate' type='password' name='password' id='password' ng-model="user.password" required/>
                                
                                <label for='password'>Senha</label>	
                                <span class="help-block custom-fonts-alert" ng-show="loginForm.password.$error.required">Campo obrigatório!</span>
                            </div>                               
                        </div>
                        <br/>
                        <div class='row'>    
                            <a class="col s12 custom-login-botton waves-effect waves-light btn modal-trigger" href="#modal"
                            type="submit" id="modal1" name="action" ng-click="auth(user)" ng-disabled="loginForm.$invalid">
                                Login
                            </a>    
                        </div>

                        <div class="row">
                            <a class='pink-text' href='#!'>
                                <b>Esqueceu sua senha ?</b>
                            </a>
                        </div>                            
                    </form>
                </div>
            </div>
            
            <!-- Modal Structure -->
            <div id="modal" class="modal custom-modal">
                <div class="row">
                    <div class="col s6">
                        <h3>Carregando</h3>
                    </div>
                    <div class="col s6">
                        <div id="search" class="row custom-search custom-serach-load">
                            <div class="preloader-wrapper big active">
                                    <div class="spinner-layer spinner-blue-only">
                                        <div class="circle-clipper left">
                                            <div class="circle"> </div>
                                        </div>
                                        <div class="gap-patch">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>            
    </body>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="webapp/lib/node_modules/materialize-css/dist/css/materialize.css" rel="stylesheet" type="text/css"/>
    <link href="webapp/lib/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="webapp/lib/css/angular-toastr.css" rel="stylesheet" type="text/css"/>
    <link href="webapp/lib/node_modules/angular-ui-grid/ui-grid.css" rel="stylesheet" type="text/css"/>
        
    <!-- Libraris js -->	

    <script src="webapp/lib/node_modules/jquery/dist/jquery.js" type="text/javascript"></script>
    <script src="webapp/js/jquery-ui.js" type="text/javascript"></script>
    <script src="webapp/lib/node_modules/angular/angular.js" type="text/javascript"></script>

    <script src="webapp/lib/node_modules/angular-route/angular-route.js" type="text/javascript"></script>
    <script src="webapp/lib/node_modules/angular-resource/angular-resource.js" type="text/javascript"></script>
    <script src="webapp/lib/node_modules/angular-animate/angular-animate.js" type="text/javascript"></script>	
    <script src="webapp/lib/node_modules/angular-touch/angular-touch.js" type="text/javascript"></script>
    <script src="webapp/lib/node_modules/materialize-css/dist/js/materialize.js" type="text/javascript"></script>
    <script src="webapp/lib/node_modules/angular-messages/angular-messages.min.js" type="text/javascript"></script>	
    <script src="webapp/lib/node_modules/angular-ui-grid/ui-grid.js" type="text/javascript"></script>
    <script src="webapp/lib/node_modules/angular-materialize/src/angular-materialize.js" type="text/javascript"></script>

    <script src="webapp/lib/js/angular-toastr.js" type="text/javascript"></script>
    <script src="webapp/lib/node_modules/angular-input-masks/src/angular-input-masks.br.js" type="text/javascript"></script>
    <script src="webapp/lib/js/angular-input-masks-standalone.min.js" type="text/javascript">	</script>	

    <!-- application -->
    <script src="webapp/app.js" type="text/javascript"></script>
            
    <!-- Services -->
    <script src="webapp/project/resource/login/service/loginService.js" type="text/javascript"></script>

    <!--  controllers -->	
    <script src="webapp/project/resource/login/login.js" type="text/javascript"></script>	
    <script src="webapp/lib/js/config.js" type="text/javascript"></script>
</html>