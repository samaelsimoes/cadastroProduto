<?php
	include("backend/conexao.php");
?>
<!-- GRID -->
<section class="row" ng-controller="ProdutoCRTL">

	<div class="">
		<div class="custom-border-radius z-depth-1 grey lighten-4 row">
			<div class="custom-margin">
				<div class="table-responsive">
					<div class="row">
						<div class="cols12">
							<h4> Produto </h4>
						</div>
					</div>
					<div class="form-group row"> 
						<div class="col12  bd-content">	
							<div id="resupsall" class="divResultado"></div>
							
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<div class="row right">
		<div class="col">
		    <h2 data-target="modal3">
		  		<a data-target="modal3" class="modal-trigger btn-floating btn-large waves-effect waves-light custom-botao-acept custom-botao-add">
		  			<i class="material-icons custom-icones">add</i>
		  		</a>
		  	</h2>
		</div>
	</div> 

	<!-- Modal cadastro de produto -->
	<div id="modal3" class="modal hoverable bordered striped">
		<div class="modal-content" style="overflow-y: hidden;">
			<form name="productForm" ng-submit="addProduct(prod)">
				<div class="row">
					<h4>Cadastro de produtos</h4>					
					
					<div class="row">
						<div class="input-field col s6">						
							<input placeholder="Nome" id="nameProd" name="nameProd" required type="text" class="validate" ng-model="prod.nameProd" ng-maxlength="90" required>
							
							<label for="nameProd">Nome:</label>
							
							<span class="help-block custom-fonts-alert" ng-class="error" ng-show="productForm.nameProd.$error.required">Campo obrigatório!</span>
							<span class="help-block custom-fonts-alert" ng-show="productForm.nameProd.$error.maxlength">Apenas é possivel cadastrar com no maximo 90 caracteres!</span>
						</div>
						<div class="input-field col s6">							
							<select id="tp_prod" name="tp_prod" required material-select watch ng-model="prod.tp_prod">
								<option value="" disabled selected>Selecione uma das opções</option>               				
								<?php
									$query=pg_query($db, "select * from tp_produto");

									$tp_prods = [];  
								
									if (pg_num_rows($query) > 0) {
										while($row = pg_fetch_array($query)) {?>
											
											<option value="<?php echo $row['id_tp_prod'] ?>"><?php echo $row['tp_produto'] ?></option><?php												
										}
									}
								?>
							</select>
							<label>Tipo de produto</label>
							<span class="help-block custom-fonts-alert" ng-class="error" ng-show="productForm.tp_prod.$error.required">Campo obrigatório!</span>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">		          		
							<textarea id="descricao" name="descricao" class="materialize-textarea" required ng-model="prod.descricao" ng-maxlength="380"></textarea>
							<label for="descricao">Descrição do produto:</label>
							
							<span class="help-block custom-fonts-alert" ng-class="error" ng-show="productForm.descricao.$error.required">Campo obrigatório</span>
							<span class="help-block custom-fonts-alert" ng-show="productForm.descricao.$error.maxlength">Apenas é possivel cadastrar com no maximo 380 caracteres!</span>	
						</div>
					</div>
					<div class="row">
						<div class="col s4">
							<label for="valueProd">Valor do produto:</label>
							<input placeholder="R$" id="valueProd" name="valueProd" required type="number" class="validate" ng-model="prod.valueProd" ng-maxlength="10">

							<span class="help-block custom-fonts-alert" ng-class="error" ng-show="productForm.valueProd.$error.required">Campo obrigatório!</span>
						</div>
					</div>	
				</div>
				<br>
				<div class="row">
					<div class="col">
						<a style="border-radius:5px;" href="#!/produto" class="modal-action modal-close waves-effect waves-green btn-flat green" type="submit" name="action" ng-click="addProduct(prod)" ng-disabled="productForm.$invalid">
							<i class="material-icons center custom-icones">check</i>
						</a>
					</div>
					<div class="col">
						<a style="border-radius:5px;" href="#!/produto" class="modal-action modal-close waves-effect waves-red btn-flat red">
							<i class="material-icons custom-icones">close</i>
						</a>
					</div>

					<div class="col6">
						<div class="row right">
							<div class="col">
								<a data-target="modal4" style="border-radius:5px; color: #fff;"  class="modal-trigger tn-floating waves-effect waves-red btn-flat green">
									Cadastrar tipo de produto
								</a>				
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<!-- Modal cadastro tpproduto -->
	<div id="modal4" class="modal hoverable bordered striped">
		<div class="modal-content">
			<form name="formTpProduct" ng-submit="addTpProduct(tpProduto)">
				<div class="row">
					<form class="col s8">				
						<h4>Tipo de produto</h4>					
					
						<div class="row">
							<div class="input-field col s12">		          		
								<input id="tp_produto" name="tp_produto" required type="text" class="validate" placeholder="Produto"  ng-model="tpProduto.tp_produto" ng-maxlength="80" required>
								
								<label for="name">Produto:</label>
								
								<span class="help-block custom-fonts-alert" ng-class="error" ng-show="formTpProduct.tp_produto.$error.required">Campo obrigatório</span>
								<span class="help-block custom-fonts-alert" ng-show="formTpProduct.tp_produto.$error.maxlength">Apenas é possivel cadastrar com no maximo 80 caracteres!</span>	
							</div>
						</div>
					</form>
				</div>
				<div class="row">
					<div class="col">
						<a href="#!/produto" class="modal-action modal-close waves-effect waves-green btn-flat green" type="submit" name="action" ng-click="addTpProduct(tpProduto)" ng-disabled="formTpProduct.$invalid">
							<i class="material-icons center custom-icones">check</i>
							</a>
					</div>
					<div class="col">
						<a href="#!/produto" class="modal-action modal-close waves-effect waves-red btn-flat red">
							<i class="material-icons custom-icones">close</i>
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<script src="js/config.js" type="text/javascript"></script>
