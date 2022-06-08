<?php
require 'conexion.php';
$imagen = $_POST['ojo'];
$mensaje = $_POST['imagen'];
if($imagen == 1){
    $editar = mysqli_query($mysql,"UPDATE message_image SET visible = 0 WHERE id_mi = $mensaje");
    header('Location: ../index.html');
}else {
    $editar = mysqli_query($mysql,"UPDATE message_image SET visible = 1 WHERE id_mi = $mensaje");
    header('Location: ../index.html');
}





?>