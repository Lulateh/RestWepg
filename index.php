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

<?php
include "./parts/header.php";
?>
<!-- Featured -->

<div class="feat-container">


        <section>
            <h2 class="feat-text">FEATURED</h2>
        </section>
    
        <div class="cards-container">
            
           <section class="cards">
                <img class="cards-icon" src="./imgs/Comidas/Entradas/Falafel.png" alt="">
                <h3 class="cards-title">Falafel</h3>
                <a class="button button1"  href="dish_pane.php?id=4">More</a>
            </section>
                        <section class="cards">
                            <img class="cards-icon" src="./imgs/Comidas/Bebidas/Thandai.png" alt="Thandai">
                            <h3 class="cards-title">Thandai</h3>
                            <a class="button button1"href="dish_pane.php?id=28" >More</a>
                        </section>
    
                        <section class="cards">
                            <img class="cards-icon" src="./imgs/Comidas/Entradas/KashmiriAlooDum.png" alt="AlooDum">
                            <h3 class="cards-title">Aloo Dum</h3>
                            <a class="button button1"href="dish_pane.php?id=5" >More</a>
                        </section>
    
                        <section class="cards">
                            <img class="cards-icon" src="./imgs/Comidas/PlatosFuertes/Samosas.png" alt="Samosas">
                            <h3 class="cards-title">Samosas</h3>
                            <a class="button button1"href="dish_pane.php?id=20" >More</a>
                        </section>
                
                        <section class="cards">
                            <img class="cards-icon" src="./imgs/Comidas/Postres/Rasmali.png" alt="Rasmali">
                            <h3 class="cards-title">Rasmali</h3>
                            <a class="button button1"href="dish_pane.php?id=37" >More</a>
                        </section>
    
                        <section class="cards">
                            <img class="cards-icon" src="./imgs/Comidas/PlatosFuertes/Palak-Paneer.png" alt="Palak-Paneer">
                            <h3 class="cards-title">Palak-Paneer</h3>
                            <a class="button button1"href="dish_pane.php?id=18" >More</a>
                        </section>
    
                        <section class="cards">
                            <img class="cards-icon" src="./imgs/Comidas/Postres/Kheer.png" alt="Kheer">
                            <h3 class="cards-title">Kheer</h3>
                            <a class="button button1"href="dish_pane.php?id=33" >More</a>
                        </section>
    
                        <section class="cards">
                            <img class="cards-icon" src="./imgs/Comidas/Bebidas/Lassi.png" alt="Lassi">
                            <h3 class="cards-title">Lassi</h3>
                            <a class="button button1"href="dish_pane.php?id=25" >More</a>
                        </section>
    
                        <section class="cards">
                            <img class="cards-icon" src="./imgs/Comidas/PlatosFuertes/Biryani.png" alt="Biryani">
                            <h3 class="cards-title">Biryani</h3>
                            <a class="button button1"href="dish_pane.php?id=14" >More</a>
                        </section>
    
                        <section class="cards">
                            <img class="cards-icon" src="./imgs/Comidas/Entradas/KathiRollsdePollo.png" alt="Kathi">
                            <h3 class="cards-title">Kathi</h3>
                            <a class="button button1"href="dish_pane.php?id=6" >More</a>
                        </section>
    
                
                
        </div>
</div>        

<!-- Menu Header-->
<section class="menu_header">
    <h2 class="menu_title">MENU</h2>
      
</section>

<!-- Menu items-->

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
      echo "<h3 class='dish_name'>".$dish["dish_name"]."</h3>";
      echo "<h4 class='dish_name'>$ ".$dish["dish_price"]."</h4>";
      echo "<a class='button button1' href='dish_pane.php?id=".$dish["dish_id"]."'>More</a>";
      echo "</section>";
    }
  ?>

</div>

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
      echo "<h3 class='dish_name'>".$dish["dish_name"]."</h3>";
      echo "<h4 class='dish_name'>$ ".$dish["dish_price"]."</h4>";
      echo "<a class='button button1' href='dish_pane.php?id=".$dish["dish_id"]."'>More</a>";
      echo "</section>";
    }
  ?>

</div>

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
      echo "<h3 class='dish_name'>".$dish["dish_name"]."</h3>";
      echo "<h4 class='dish_name'>$ ".$dish["dish_price"]."</h4>";
      echo "<a class='button button1' href='dish_pane.php?id=".$dish["dish_id"]."'>More</a>";
      echo "</section>";
    }
  ?>

</div>

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
      echo "<h3 class='dish_name'>".$dish["dish_name"]."</h3>";
      echo "<h4 class='dish_name'>$ ".$dish["dish_price"]."</h4>";
      echo "<a class='button button1' href='dish_pane.php?id=".$dish["dish_id"]."'>More</a>";
      echo "</section>";
    }
  ?>

</div>


<?php
include "./parts/footer.php";
?>
</body>

</html>