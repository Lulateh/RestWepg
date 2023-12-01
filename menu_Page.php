<?php

require_once './database.php';
    // Reference: https://medoo.in/api/select
    $appetizers = $database->select("tb_dish","*",['id_category' => 1]);
    $mainDishes = $database->select("tb_dish","*",['id_category' => 2]);
    $drinks = $database->select("tb_dish","*",['id_category' => 3]);
    $desserts = $database->select("tb_dish","*",['id_category' => 4]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indian Restaurant</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5d064a3221.js" crossorigin="anonymous"></script>
    <!-- main css -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./testbench-css/main-testbench.css">
</head>
<body>
    
<?php
include "./parts/navigator.php";
?>

<!-- Menu Header-->

<section class="menu_header">
    <h2 class="menu_title">MENU</h2>

    <div class="menu_logos_container">

      <div class="imagen-boton fa-solid fa-cookie-bite fa-2xl"onclick= "show('apetizers_Section')"></div>
      <div class="imagen-boton fa-solid fa-solid fa-utensils fa-2xl"onclick= "show('main_dish_Section')"></div>
      <div class="imagen-boton fa-solid fa-mug-saucer fa-2xl"onclick= "show('drinks_Section')"></div>
      <div class="imagen-boton fa-solid fa-cheese fa-2xl"onclick= "show('desserts_Section')"></div>
    </div>
    <div class="barra-busqueda">
        <input type="text" id="buscador" placeholder="Buscar...">
    </div>
        

    
</section>

<!-- Menu items-->

<!--Appetizers-->

<section id="apetizers_Section" class="category">

<!-- header Appetizers-->

<section class="menu_items_header">
    <h2 class="menu_items_title">Apetizers</h2>
</section>

<!-- items main appetizers-->

<div class="menu_items_container">

  <?php
     foreach($appetizers as $dish){
      echo "<section class='menu_box'>";
      echo "<img class='dish_image' src='./imgs/Comidas/".$dish["dish_image"]."' alt='".$dish["dish_name"]."'>";
      echo "<h3 class='dish_name'id='dish_name'>".$dish["dish_name"]."</h3>";
      echo "<h4 class='dish_name'>$ ".$dish["dish_price"]."</h4>";
      echo "<a class='button button1' href='dish_pane.php?id=".$dish["dish_id"]."'>More</a>";
      echo "</section>";
    }
  ?>

</div>

</section>

<!--Main dish-->

<section id="main_dish_Section" class="category">

<!-- Header Main dish-->

<section class="menu_items_header">
    <h2 class="menu_items_title">Main Dish</h2>
</section>

<!-- items Main dish-->

<div class="menu_items_container">

  <?php
     foreach($mainDishes as $dish){
      echo "<section class='menu_box'>";
      echo "<img class='dish_image' src='./imgs/Comidas/".$dish["dish_image"]."' alt='".$dish["dish_name"]."'>";
      echo "<h3 class='dish_name'id='dish_name'>".$dish["dish_name"]."</h3>";
      echo "<h4 class='dish_name'>$ ".$dish["dish_price"]."</h4>";
      echo "<a class='button button1' href='dish_pane.php?id=".$dish["dish_id"]."'>More</a>";
      echo "</section>";
    }
  ?>

</div>
</section>
<!--Drinks-->

<section id="drinks_Section" class="category">

<!-- header Drinks-->

<section class="menu_items_header">
    <h2 class="menu_items_title">Drinks</h2>
</section>

<!-- items Drinks-->

<div class="menu_items_container">

  <?php
     foreach($drinks as $dish){
      echo "<section class='menu_box'>";
      echo "<img class='dish_image' src='./imgs/Comidas/".$dish["dish_image"]."' alt='".$dish["dish_name"]."'>";
      echo "<h3 class='dish_name'id='dish_name'>".$dish["dish_name"]."</h3>";
      echo "<h4 class='dish_name'>$ ".$dish["dish_price"]."</h4>";
      echo "<a class='button button1' href='dish_pane.php?id=".$dish["dish_id"]."'>More</a>";
      echo "</section>";
    }
  ?>

</div>
</section>

<!--Desserts-->
<section id="desserts_Section"class="category">
<!-- header Desserts-->

<section class="menu_items_header">
    <h2 class="menu_items_title">Desserts</h2>
</section>

<!-- items Desserts-->

<div class="menu_items_container">

  <?php
     foreach($desserts as $dish){
      echo "<section class='menu_box'>";
      echo "<img class='dish_image' src='./imgs/Comidas/".$dish["dish_image"]."' alt='".$dish["dish_name"]."'>";
      echo "<h3 class='dish_name'id='dish_name'>".$dish["dish_name"]."</h3>";
      echo "<h4 class='dish_name'>$ ".$dish["dish_price"]."</h4>";
      echo "<a class='button button1' href='dish_pane.php?id=".$dish["dish_id"]."'>More</a>";
      echo "</section>";
    }
  ?>

</div>
</section>


<?php
include "./parts/footer.php";
?>

<script>

      function show(category) {
       
          document.querySelectorAll('.category').forEach(function(elemento) {
              elemento.style.display = 'none';
          });

          var categoriaMostrar = document.getElementById(category);
          if (categoriaMostrar) {
              categoriaMostrar.style.display = 'block';
          }
      }

      //buscardor

      document.addEventListener('DOMContentLoaded', function () {
          
          var buscador = document.getElementById('buscador');

          
          buscador.addEventListener('input', function () {
              
              var valorBuscador = buscador.value.toLowerCase();


              var nombresPlatos = document.querySelectorAll('#dish_name');

              
              nombresPlatos.forEach(function (nombrePlato) {
                  var nombre = nombrePlato.textContent.toLowerCase();
                  var coincide = nombre.indexOf(valorBuscador) !== -1;


                  var tarjeta = nombrePlato.closest('.menu_box');
                  tarjeta.style.display = coincide ? 'block' : 'none';
              });
          });
      });

  </script>

</body>

</html>