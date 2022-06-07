<?php
require 'conexion.php';
$title = $_POST['tittle'];
$description = $_POST['description'];
$image = $_FILES['upfile']['name'];
$rut = $_FILES['upfile']['tmp_name'];
$tipo = $_FILES['upfile']['type'];
$ruta = "../img/";

copy($rut, $ruta.$image);


$message = "Insert into messages(title, description, date) values ('$title', '$description', '".date("Y-m-d")."')";
$imagee = "Insert into image(name, type) values ('$image', '$tipo')";

if(mysqli_query($mysql,$message)){
    if(mysqli_query($mysql,$imagee)){
        header('Location: ../index.html');
    }

}else{
    echo "nel";

  /*  if("<script>alert('No se encontrar')</script>"){
        header('Location: ../index.html');
            }*/
}

?>