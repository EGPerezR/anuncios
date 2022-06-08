<?php
require 'conexion.php';
$ruta = "../img/";
$material = "SELECT I.name, M.title, M.description, MI.visible FROM message_image as MI inner join image as I on I.id_image = MI.id_imagee inner join messages as M on M.id=MI.id_message";

$ejecutra = mysqli_query($mysql, $material);
?>
<table style="border-collapse: collapse;">

<?php
if ($ejecutra-> num_rows > 0){

    while($row = $ejecutra->fetch_assoc()){
        echo "<tr>";
            echo "<td class='col s5'>";
            ?>
                <img src="img/<?php echo $row['name']?>" style="width: 100%;">
            <?php
            echo "</td>";
            echo "<td class='col s7'>";
                echo "<b>".$row['title']."</b><br>";
                echo $row['description'];
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