<?php
require 'conexion.php';

$visualizar = "SELECT I.name, M.title, M.description FROM message_image as MI INNER JOIN messages as M on MI.id_message=M.id INNER JOIN image as I on MI.id_imagee=I.id_image where visible = 1";
$ejecutar = mysqli_query($mysql, $visualizar);
$numero = 0;
if ($ejecutar->num_rows > 0) {
$numero = $ejecutar->num_rows;
?>

  <div id="myCarousel" class="carousel slide h-100 d-inline-block w-100 p-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <?php
      for ($i = 0; $i < $ejecutar->num_rows; $i++) {
        if ($i == 0) {
       
      ?>

          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?php echo $i ?>" class="active" aria-current="true" aria-label="Slide <?php echo $i+1 ?>"></button>
        <?php
        } else {

        
        ?>

        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?php echo $i ?>" aria-label="Slide <?php echo $i+1 ?>"></button>

      <?php
      }
      }
      ?>
    </div>
    <div class="carousel-inner">
      <?php
      $primero = 1;
      while ($row = $ejecutar->fetch_assoc()) {

        if ($primero == 1) {
      ?>
          <div class="carousel-item active " data-bs-interval="5000">
          <?php
          $primero++;
        } else {
          ?>
            <div class="carousel-item" data-bs-interval="5000">
            <?php

          }

            ?>

            <img src="img/<?php echo $row['name'];  ?>" class="d-block w-100 h-100 d-inline-block" alt="" style="background-image: no;">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(131, 131, 131, 0.788); border-radius:10px; color: black;">
              <h5><?php echo $row['title'];?></h5>
              <p><?php echo $row['description'] ?></p>
            </div>
            </div>

          <?php
        }
          ?>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
    </div>
  <?php
}

  ?>


<script>
  var num = 0;
  function numero(){
    var num;
    num = <?php  echo $numero."5000"   ?>;
    console.log(num)
    return num;
  }
</script>