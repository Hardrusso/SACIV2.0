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
					<h2>Eliminar Registro</h2>
                   
                    <table class="table table-danger table-bordered">
                        <thead>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Tipo de Documento</th>
                            <th>Documento</th>
                            <th>Tipo de Persona</th>
                            <th>Elemento a Registrar</th>
                            <th>Placa - Serial</th>
                            <th>Caracteristicas del Elemento</th>
                            <th>Codigo de Barras</th>
                        </thead>

                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>

                        </tbody>

                    </table>
                    <hr>                  
                </div>
                <div class="alert alert-danger" role="alert">
                    <p>¿Esta seguro de eliminar este registro?</p>
                    <p>Una vez eliminado no podra ser recuperado</p>
                    <form action="" method="post">
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-user-xmark"></i> Eliminar
                        </button>
            </form>
                </div>
            </div>            
        </div>
       
    </div>
</div>



<?php include "./scripts.php";?>
