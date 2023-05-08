<?php session_start();
    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $Crud = new Crud();

    $datos = array(
        "nombre" => $_POST['nombre'],
        "paterno" => $_POST['paterno'],
        "materno" => $_POST['materno'],
        "fecha_nacimiento" => $_POST['fechaNacimiento'],
    );

    $respuesta = $Crud->insertarDatos($datos);

    if($respuesta->getInsertedId() > 0){
        $_SESSION['mensaje_crud'] = 'insert';
        header("Location: ../index.php");
    } else {
        print_r($respuesta);
    }
?>