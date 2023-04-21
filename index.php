<?php include 'template/header.php' ?>

<?php
    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from empleados");
    $empleadosEL = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <!-- inicio alerta -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Ingrese información en los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Se agrego correctamente la informacion.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   
            
            

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   



            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong> Los datos se han actualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados exitosamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <!-- fin alerta -->
            <div>
                <div class="card-header">
                    Lista de empleados
                </div>
                <div class="p-3">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Fecha de ingreso</th>
                                <th scope="col">Puesto</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($empleadosEL as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->Id_empleadosL; ?></td>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->apellido; ?></td>
                                <td><?php echo $dato->edad; ?></td>
                                <td><?php echo $dato->telefono; ?></td>
                                <td><?php echo $dato->direccion; ?></td>
                                <td><?php echo $dato->fecha_ingreso; ?></td>
                                <td><?php echo $dato->puesto; ?></td>
                                <td><a class="text-success" href="editar.php?Id_empleadosL=<?php echo $dato->Id_empleadosL; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?Id_empleadosL=<?php echo $dato->Id_empleadosL; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-md-3">
    <div class="card bg-secondary">
        <div class="card-header bg-primary text-white">
            Ingresar datos de los empleados:
        </div>
        <form class="p-4" method="POST" action="registrar.php">
            <div class="mb-3">
                <label class="form-label">Nombre: </label>
                <input type="text" class="form-control" name="txtNombre" autofocus required>
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido: </label>
                <input type="text" class="form-control" name="txtApellido" autofocus required>
            </div>
            <div class="mb-3">
                <label class="form-label">Edad: </label>
                <input type="number" class="form-control" name="txtEdad" autofocus required>
            </div>
            <div class="mb-3">
                <label class="form-label">Teléfono o celular: </label>
                <input type="number" class="form-control" name="txtTelefono" autofocus required>
            </div>
            <div class="mb-3">
                <label class="form-label">Dirección: </label>
                <input type="text" class="form-control" name="txtDireccion" autofocus required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de ingreso: </label>
                <input type="text" class="form-control" name="txtFecha_ingreso" autofocus required>
            </div>
            <div class="mb-3">
                <label class="form-label">Puesto en la empresa: </label>
                <input type="text" class="form-control" name="txtPuesto" autofocus required>
            </div>
            <div class="d-grid">
                <input type="hidden" name="oculto" value="1">
                <input type="submit" class="btn btn-primary" value="Registrar">
            </div>
        </form>
        <div class="card-footer">
            Desarrollado por Lester Arana
        </div>
    </div>
</div>
