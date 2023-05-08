<?php session_start();
    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $Crud = new Crud();

    $id = $_POST['id'];
    $datos = array(
        //"_id" => $_POST['id'],
        "nombre" => $_POST['nombre'],
        "paterno" => $_POST['paterno'],
        "materno" => $_POST['materno'],
        "fecha_nacimiento" => $_POST['fechaNacimiento'],
    );

    $respuesta = $Crud->actualizar($id, $datos);
    if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0){
        $_SESSION['mensaje_crud'] = 'update';
        header("Location: ../index.php");
    } else {
        print_r($respuesta);
    }
?>