<?php session_start();
    require_once "./clases/Conexion.php";
    require_once "./clases/Crud.php";
    $crud = new Crud();
    $datos = $crud->mostrarDatos();

    $mensaje = "";
    if(isset($_SESSION['mensaje_crud'])){
        $mensaje = $crud->mensajesCrud($_SESSION['mensaje_crud']);
        unset($_SESSION['mensaje_crud']);
    }
?>

<?php include "./header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h2>CRUD con MongoDB y PHP</h2>
                    <a href="./agregar.php" class="btn btn-primary">
                        <i class="fa-solid fa-user-plus"></i> Agregar Nuevo Registro
                    </a>
                    <hr>
                    <table class="table table-sm table-hover table-bordered">
                        <thead class="text-center">
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>
                            <?php 
                                foreach($datos as $item){
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $item->nombre; ?></td>
                                <td class="text-center"><?php echo $item->paterno; ?></td>
                                <td class="text-center"><?php echo $item->materno; ?></td>
                                <td class="text-center"><?php echo $item->fecha_nacimiento ?></td>
                                <td class="text-center">
                                    <form action="./actualizar.php" method="post">
                                    <input type="text" hidden value="<?php echo $item->_id ?>" name="id">
                                        <button class="btn btn-warning">
                                            <i class="fa-solid fa-user-pen"></i>
                                        </button>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <form action="./eliminar.php" method="POST">
                                        <input type="text" hidden value="<?php echo $item->_id ?>" name="id">
                                        <button class="btn btn-danger">
                                            <i class="fa-solid fa-user-xmark"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>

<script>
    let mensaje = <?php echo $mensaje; ?>;
    console.log(mensaje);
</script>