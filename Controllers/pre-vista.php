<?php
require 'conexion.php';
$ruta = "../img/";
$material = "SELECT * FROM image, messages";

$ejecutra = mysqli_query($mysql, $material);
?>
<table>
<tr>
    <th>
    </th>
    <th>
    </th>
</tr>


<?php
if ($ejecutra-> num_rows > 0){

    while($row = $ejecutra->fetch_assoc()){
        echo "<tr>";
            echo "<td>";
                echo "<img src'".$ruta.$row['name']."'>";
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