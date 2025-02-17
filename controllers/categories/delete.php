<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "DELETE FROM categories WHERE id = :id;"; 
    $params = ["id" => $_GET["id"]]; // Izmanto GET metodi, lai iegūtu ID
    $category = $db->query($sql, $params);// Izpilda dzēšanas vaicājumu
    header("Location: /categories/index.php"); 
    exit();
   }


// Pārsūta uz kategoriju sarakstu


 $pageTitle = "delete";
 $style = "css/kopejais-stils.css";
 require "views/categories/edit.view.php";
