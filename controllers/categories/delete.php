<?php

require "Database.php";

$sql = "DELETE FROM categories WHERE category_name = :id ;";
$params = ["id" => $_POST["id"]];
$category = $db->query($sql, $params)->fetch();

if(!$category){
    redirectIFNotFound();
}

$pageTitle = "Kategorijas";
$style = "css/kopejais-stils.css";
require "views/categories/show.view.php"; 
?>
