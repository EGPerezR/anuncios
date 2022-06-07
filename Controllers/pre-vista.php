<?php
require 'conexion.php';
$ruta = "../img/";
$material = "SELECT id_image, name FROM image";

$ejecutra = mysqli_query($mysql, $material);
?>
<table style="border-collapse: collapse;">

<?php
if ($ejecutra-> num_rows > 0){

    while($row = $ejecutra->fetch_assoc()){
        echo "<tr>";
            echo "<td class='col s4'>";
            ?>
                <img src="img/<?php echo $row['name']?>" style="width: 100%;">
            <?php
            echo "</td>";
         //   echo "<td>";
               // echo "<b>".$row['title']."</b>";
              //  echo $row['description'];
          //  echo "</td>";
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