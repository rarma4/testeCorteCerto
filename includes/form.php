
<div>
	<form method="post" name="form" action="controllers/ControllersCalcular.php">
		<div class="form-row align-items-center">
			<div class="col-auto">
				<label class="sr-only" for="inlineFormInput">Primeiro número: </label>
				<input type="text" name="n1" id="n1" class="form-control mb-2" placeholder="Digite o Primeiro nº" autofocus >
			</div>
			
			<div class="col-auto">
				<label class="sr-only" for="inlineFormInput">Segundo número: </label>
				<input type="text" name="n2" id="n2" class="form-control mb-2" placeholder="Digite o Segundo nº" >
			</div>

			<div class="col-auto">
				<button type="submit"  value="soma" onclick="validarForm()" name="soma" class="btn btn-success mb-2" data-toggle="tooltip" data-placement="top" title="Soma">+
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</button>
				<button type="submit"  value="subtracao" onclick="validarForm()" name="subtracao" class="btn btn-success mb-2" data-toggle="tooltip" data-placement="top" title="Subtração">-
					<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
				</button>
				<button type="submit"  value="multiplicacao" onclick="validarForm()" name="multiplicacao" class="btn btn-success mb-2"data-toggle="tooltip" data-placement="top" title="Multiplicação">x
					<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
				</button>
				<button type="submit"  value="divisao" onclick="validarForm()" name="divisao" class="btn btn-success mb-2" data-toggle="tooltip" data-placement="top" title="Divisão">/
					<span class="glyphicon glyphicon-italic" aria-hidden="true"></span>
				</button>
				
			</div>
			<div class="col-auto">
				<button type="submit"  value="Dobrar"  onclick="validarFormDobrar()" name="dobrar" class="btn btn-success mb-2" data-toggle="tooltip" data-placement="top" title="Dobrar o valor do primeiro campo">Dobrar</button>
				<input type="button" class="btn btn-primary mb-2" value="Limpar" data-toggle="tooltip" data-placement="top" title="Limpar" onclick="javascript: location.href='calcular.php';" />
			
			</div>

		</div>
	</form><br>
</div>
