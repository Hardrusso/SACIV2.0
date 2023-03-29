<?php include "./header.php";?>


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h1>SACI</h1>
                    <h2>SISTEMA DE ACCESO Y CONTROL DE INGRESO </h2>
                    <a href="" class="btn btn-primary">
                    <i class="fa-solid fa-user-plus"></i> Agregar Nuevo Registo
                    </a>
                    <hr>
                    <table class="table table-sm table-hover table.berdered">
                        <thead>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Tipo de Documento</th>
                            <th>Documento</th>
                            <th>Tipo Persona</th>
                            <th>Elmento Registrado</th>
                            <th>Codigo de Barras</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
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
                                <td class="text-center">
                                    <form action="" method="post">
                                        <button class="btn btn-warning">
                                        <i class="fa-solid fa-user-pen"></i>
                                        </button>
                                    </form>
                                </td>
                                <td class="text-center">
                                <form action="" method="post">
                                        <button class="btn btn-danger">
                                        <i class="fa-solid fa-user-xmark"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



    <?php include "./scripts.php";?>
