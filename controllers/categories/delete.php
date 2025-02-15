<?php

if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: /");
    exit();
}

$sql = "DELETE FROM categories WHERE id = :id;"; 

$params = ["id" => $_GET["id"]]; // Izmanto GET metodi, lai iegūtu ID

// Izpilda dzēšanas vaicājumu
$category = $db->query($sql, $params); 

// Pārsūta uz kategoriju sarakstu
header("Location: /categories/index"); 
exit();

 $pageTitle = "delete";
 $style = "css/kopejais-stils.css";
 require "views/categories/edit.view.php";
