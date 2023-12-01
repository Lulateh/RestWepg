<?php
    require_once '../database.php';
    
    include('simple_html_dom.php');

    //link
    $link = "http://localhost/Interactivas/ProyectoComida/index_Menu_Page.html";

    $locations = file_get_html($link);

    $destinations = [];
    $filenames = [];
    $descriptions = [];

    //save destination locations and filenames for the images
    foreach ($locations->find('.dish_name') as $location){
        $name = trim(str_get_html($location)->plaintext);
        $destinations[] = $name;
        //
        $filename = strtolower($name);
        $filename = str_replace(',', '', $filename);
        $filename = str_replace('.', '', $filename);
        $filename = str_replace(' ', '-', $filename);
        $filenames[] = $filename;
    }

    //save destination descriptions
    $pos = -1;
    foreach ($locations->find('.dish_description') as $description){
       $pos++;
       if($pos > 2){
            $descriptions[] = trim($description->plaintext);
       }
    }

    //get and download destination images
    $index = 0;
    foreach ($locations->find('.dish_image') as $image){
        if($image->src != ""){
            if($index < count($filenames)){
                file_put_contents("../imgs/Comidas/dish-".$filenames[$index].".jpg", file_get_contents($image->src));
                $index++;
            }
        }
    }

    for($i=0; $i<count($filenames); $i++){
        // Reference: https://medoo.in/api/insert
        $database->insert("tb_dish",[
            "dish_name"=> $destinations[$i],
            "dish_detail"=> $descriptions[$i],
            "dish_image"=> "dish-".$filenames[$i].".jpg",
            "dish_price"=> 10.00
        ]);
    }
    

?>