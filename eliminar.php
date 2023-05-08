<?php 
    include "./clases/Conexion.php";
    include "./clases/Crud.php";
    include "./header.php";

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4 fondoDelete">
                <div class="card-body">
                    <a href="index.php" class="btn btn-outline-info">
                        <i class="fa-solid fa-angles-left"></i> Regresar
                    </a>
                    <h2>Eliminar Registro</h2>
                    
                    <table class="table table-bordered">
                        <thead>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Fecha de Nacimiento</th>
                        </thead>
                        <tbody>
                            <td><?php echo $datos->nombre ?></td>
                            <td><?php echo $datos->paterno ?></td>
                            <td><?php echo $datos->materno ?></td>
                            <td><?php echo $datos->fecha_nacimiento ?></td>
                        </tbody>
                    </table>
                    <hr>
                    <div class="alert alert-danger" role="alert">
                        <p>¿Está seguro de eliminar este registro?</p>
                        <p>
                            Una vez eliminado, no podrá ser recuperado!!
                        </p>
                    </div>
                    <form action="./procesos/eliminar.php" method="post">
                    <input type="text" value="<?php echo $datos->_id; ?>" hidden name="id">
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-user-xmark"></i> Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>