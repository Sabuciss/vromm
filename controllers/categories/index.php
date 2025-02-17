<?php

require "functions.php";
require "Database.php";

$config = require("config.php");

echo "Hi there  <br><br>";
$db = new Database($config["database"]);

$select = "SELECT * FROM categories"; 

$params = [];

if (isset($_GET["search_query"])  && $_GET["categorysearch_query_name"] != ""){
   echo "Atgriest ierakstus";
   $category_name = "%" . $_GET["search_query"] . "%";
   $select .= " WHERE category_name LIKE  :nosaukums"; 
   $params = ["nosaukums" => $search_query];               
}
$categories = $db->query($select, $params)->fetchAll();

$pageTitle = "Kategorija";
$style = "css/kopejais-stils.css";
require "views/categories/index.view.php";  
