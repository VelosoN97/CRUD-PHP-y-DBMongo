<?php
    include "./clases/Conexion.php";
    include "./clases/Crud.php";

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);
    $idMongo = $datos->_id;
?>

<?php include "./header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <a href="index.php" class="btn btn-outline-info">
                        <i class="fa-solid fa-angles-left"></i> Regresar
                    </a>
                    <h2>Actualizar Registro</h2>
                    
                    <form action="./procesos/actualizar.php" method="post">
                        <input type="text" hidden value="<?php echo $idMongo ?>" name="id">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" 
                        value="<?php echo $datos->nombre?>">
                        <label for="paterno">Apellido Paterno</label>
                        <input type="text" class="form-control" id="paterno" name="paterno" 
                        value="<?php echo $datos->paterno?>">
                        <label for="materno">Apellido Materno</label>
                        <input type="text" class="form-control" id="materno" name="materno" 
                        value="<?php echo $datos->materno?>">
                        <label for="fechaNacimiento">Fecha de Nacimiento</label>
                        <input type="text" id="fechaNacimiento" name="fechaNacimiento" class="form-control" 
                        value="<?php echo $datos->fecha_nacimiento?>">
                        <button class="btn btn-warning mt-3">
                            <i class="fa-solid fa-floppy-disk"></i> Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>