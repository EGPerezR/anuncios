<?php
require 'conexion.php';
$ruta = "../img/";
$material = "SELECT MI.id_mi, I.name, M.title, M.description, MI.visible FROM message_image as MI inner join image as I on I.id_image = MI.id_imagee inner join messages as M on M.id=MI.id_message";

$ejecutra = mysqli_query($mysql, $material);
?>
<table class="centered responsive-table">

<?php
if ($ejecutra-> num_rows > 0){

    while($row = $ejecutra->fetch_assoc()){
        echo "<tr>";
            echo "<td class='col s3'>";
            ?>
                <img src="img/<?php echo $row['name']?>" style="width: 100%;">
            <?php
            echo "</td>";
            echo "<td class='col s6'>";
            echo "<br>";
            echo "<br>";
                echo "<b>".$row['title']."</b><br>";
                echo $row['description'];
            echo "</td>";
            echo "<td class='col s1'>";
            echo "<br>";
            echo "<br>";
            echo "<form action='Controllers/visible.php' method='POST'>";
            echo "<input type='text' value='".$row['id_mi']."' hidden name='imagen'>";
            if($row['visible'] == 1){
                echo "<button type='submit' value='".$row['visible']."' name='ojo'><img src='img/abierto.png' style='width: 100%'></button>";
            }else if($row['visible'] == 0){
                echo "<button type='submit' value='".$row['visible']."' name='ojo'><img src='img/cerrado.png' style='width: 100%'></button>";
            }
            echo "</form>";
            echo "</td>";
            echo "<td class='col s2'>";
            echo "<br>";
            echo "<br>";
            echo "<form action='Controllers/eliminar.php' method='POST'>";
            echo "<button value='".$row['id_mi']."' type='submit' class='waves-effect waves-teal btn-flat' name='mensaje'>Eliminar</button>";
            echo "</form>";
            echo "</td>";
        echo "<tr>";
    }
}else{
    echo "nada";
}


?>
</table>
<?php
?>

<?php



?>
</table>