<?php
require 'conexion.php';

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
    }
}


?>
</table>
<?php
require 'conexion.php';

$material = "SELECT * FROM image, messages";

$ejecutra = mysqli_query($mysql, $material);
?>
<table>
<tr>
    <th>
    </th>
</tr>


<?php
if ($ejecutra-> num_rows > 0){

    while($row = $ejecutra->fetch_assoc()){

    }
}


?>
</table>