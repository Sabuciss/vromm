<?php

require "Database.php";

$sql = "SELECT * FROM categories WHERE id = :id ;";
$params = ["id" => $_GET["id"]];
$category = $db->query($sql, $params)->fetch();

if(!$category){
    header("Location: /categories/index.php");
        exit();
}

$pageTitle = "Kategorijas";
$style = "css/kopejais-stils.css";
require "views/categories/show.view.php"; 
?>
