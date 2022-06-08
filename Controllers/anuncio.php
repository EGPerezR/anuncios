<?php
require 'conexion.php';
$title = $_POST['tittle'];
$description = $_POST['description'];
$image = $_FILES['upfile']['name'];
$rut = $_FILES['upfile']['tmp_name'];
$tipo = $_FILES['upfile']['type'];
$ruta = "../img/";


$id_imagen = 0;
$id_mensaje = 0;
copy($rut, $ruta . $image);


$message = "Insert into messages(title, description, date) values ('$title', '$description', '" . date("Y-m-d") . "')";
$imagee = "Insert into image(name, type) values ('$image', '$tipo')";

if (mysqli_query($mysql, $message)) {
    if (mysqli_query($mysql, $imagee)) {
        //header('Location: ../index.html');
        $imagen = "Select id_image from image where name = '$image'";
        $mensaje = "Select id from messages where title = '$title'";
        $i = mysqli_query($mysql, $imagen);
        $m = mysqli_query($mysql, $mensaje);
        echo $imagen;
        echo $mensaje;
        while ($im = $i->fetch_assoc()) {
            $id_imagen = $im['id_image'];
        }
        while ($mes = $m->fetch_assoc()) {
            $id_mensaje = $mes['id'];
        }

        if (mysqli_query($mysql, "INSERT INTO message_image(id_message,id_imagee,visible) values($id_mensaje,$id_imagen,1)")) {
?>

            <script>
                function load(callback) {
                    alert('Anuncio Subido con exito');
                    callback();
                }
                load(function() {
                    window.location.href = "../index.html";
                })
            </script>

        <?php
        } else {
        ?>

            <script>
                function load(callback) {
                    alert('Error al subir anuncio');
                    callback();
                }
                load(function() {
                    window.location.href = "../index.html";
                })
            </script>

    <?php
        }
    }
} else {

    ?>

    <script>
        function load(callback) {
            alert('No se subio el mensaje');
            callback();
        }
        load(function() {
            window.location.href = "../index.html";
        })
    </script>

<?php


}

?>