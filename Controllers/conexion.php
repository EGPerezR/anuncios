<?php

try{
    $mysql = mysqli_connect("localhost","root","","anuncios_bateil");
}catch(Error){
  
      echo '<script>alert("No se pudo conectar con la base de datos '.mysqli_errno($mysql).'")</script>';
    
}


?>