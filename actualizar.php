<?php include "./header.php";?>

<div class="container">
    <div class="row">
        <div class="col">
			<div class="card mt-4">
				<div class="card-body">
					<a href="index.php" class="btn btn-outline-info">
						<i class="fa-solid fa-angles-left"></i> Regresar
					</a>
					<h1>SACI</h1>
					<h2>SISTEMA DE ACCESO Y CONTROL DE INGRESO </h2>
					<h2>Actualizar Registro</h2>
				</div>
			</div>
		</div>
	</div>
</div>


<form id="form1" action="registro.php" method="post">
		<label for="nombre">Nombres:</label>
		<input type="text" name="nombre" id="nombre" required><br>

		<label for="apellido">Apellidos:</label>
		<input type="text" name="apellido" id="apellido" required><br>

		<label for="tipo_documento">Tipo de Documento:</label>
		<select name="tipo_documento" id="tipo_documento" required>
			<option value="">Selecciona una opción</option>
			<option value="cedula_ciudadania">Cédula de Ciudadanía</option>
			<option value="tarjeta_identidad">Tajeta de Identidad</option>
			<option value="cedula_extranjeria">Cédula de Extranjería</option>
			<option value="pep">PEP</option>
			<option value="permiso_proteccion_temporal">Permiso de Protección Temporal</option>
		</select><br>

		<label for="documento">Documento:</label>
		<input type="text" name="documento" id="documento" required><br>

		<label for="tipo_persona">Tipo de persona:</label>
		<select name="tipo_persona" id="tipo_persona" required onchange="mostrarLabelAdicional()">
			<option value="">Selecciona una opción</option>
			<option value="instructor">Instructor</option>
			<option value="aprendiz">Aprendiz</option>
			<option value="administrativo">Personal Administrativo</option>
			<option value="visitante">Visitante</option>
		</select><br>

		<div id="div_adicional" style="display:none">
		<label for="jornada">Jornada:</label>
		<select name="jornada" id="jornada" required>
			<option value="">Selecciona una opción</option>			
		</select><br>
		<label for="ficha">Ficha:</label>
		<input type="text" name="ficha" id="ficha" required><br>
		<label for="titulada">Nombre del Programa:</label>
		<input type="text" name="titulada" id="titulada" required><br>
		</div>

		<label for="tipo_elemento">Elemento a Registrar:</label>
		<select name="tipo_elemento" id="tipo_elemento" required>
			<option value="">Selecciona una opción</option>
			<option value="moto">Moto</option>
			<option value="vehiculo">Vehículo</option>
			<option value="bicicleta">Bicicleta</option>
			<option value="portatil">Computador Portátil</option>
			<option value="tablet">Tablet</option>
			<option value="other">Otros</option>
		</select><br>

		<label for="serial">Placa - Serial del Elemento a Registrar:</label>
		<input type="text" name="serial" id="serial" required><br>

		<label for="otros">Características Elemento a Registrar:</label>
		<input type="text" name="otros" id="otros" required><br>
   
	<button class="btn btn-warning mt-3">
		<i class="fa-solid fa-floppy-disk"></i> Actualizar
	</button>
</form>


    <?php include "./scripts.php";?>
