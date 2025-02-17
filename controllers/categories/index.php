<?php
require "functions.php";
require "Database.php";

$config = require("config.php");

$sql = "SELECT * FROM categories"; 
$categories = $db->query($sql, [])->fetchAll();

$params = [];

if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
   $category_name = "%" . $_GET["search_query"] . "%";
   $sql .= " WHERE category_name LIKE :category_name"; 
   $params = ["category_name" => $category_name];               
}

$categories = $db->query($sql, $params)->fetchAll();

$pageTitle = "Kategorijas";
$style = "css/kopejais-stils.css";
require "views/categories/index.view.php"; 
?>
