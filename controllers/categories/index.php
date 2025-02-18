<?php
require "functions.php";
require "Database.php";

$config = require("config.php");

$sql = "SELECT * FROM categories"; 
$params = [];

$categories = $db->query($sql, $params)->fetchAll();

$pageTitle = "Kategorijas";
$style = "css/kopejais-stils.css";
require "views/categories/index.view.php"; 
?>
