

<div>
	<form method="post" name="form" action="controllers/ControllersCalcular.php">
		
		<div class="form-group">
			<label>Primeiro número: <input type="text" name="n1" id="n1" placeholder="Digite o Primeiro nº" autofocus ></label>
		</div>
		<div class="form-group">
			<label>Segundo número: <input type="text" name="n2" id="n2" placeholder="Digite o Segundo nº"></label>
		</div>
	
		<button type="submit"  value="soma" onclick="validarForm()" name="soma" class="btn btn-success">+</button>
		<button type="submit"  value="subtracao" onclick="validarForm()" name="subtracao" class="btn btn-success">-</button>
		<button type="submit"  value="multiplicacao" onclick="validarForm()" name="multiplicacao" class="btn btn-success">x</button>
		<button type="submit"  value="divisao" onclick="validarForm()" name="divisao" class="btn btn-success">/</button>

		<input type="button" class="btn btn-primary" value="Reset" onclick="javascript: location.href='calcular.php';" />
	</form><br>
</div>

