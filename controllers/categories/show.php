<?php

require "Database.php";

if (!isset($_GET["id"]) || $_GET["id"] == "") {
    redirectIFNotFound();
}
$sql = "SELECT * FROM categories WHERE id = :id ;";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if(!$post){
    redirectIFNotFound();
}

$pageTitle = "Kategorijas";
$style = "css/kopejais-stils.css";
require "views/categories/show.view.php"; 
?>
