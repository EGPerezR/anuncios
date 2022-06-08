<?php
require 'conexion.php';
$msj = $_POST['mensaje'];
$eliminar = "DELETE FROM message_image WHERE id_mi = ".$msj."";
$ejecuta = mysqli_query($mysql,$eliminar);

header('Location: ../index.html');

?>