
<?php

require "functions.php";
require "Database.php";

$config = require("config.php");

echo "Hi there  <br><br>";
$db = new Database($config["database"]);

$select = "SELECT * FROM posts"; 

$params = [];
if (isset($_GET["search_query"])  && $_GET["search_query"] != ""){
   echo "Atgriest ierakstus";
   $search_query = "%" . $_GET["search_query"] . "%";
   $select .= " WHERE content LIKE  :nosaukums"; 
   $params = ["nosaukums" => $search_query];               
}
$posts = $db->query($select, $params)->fetchAll();

$pageTitle = "Blogs";
$style = "css/kopejais-stils.css";
require "views/posts/index.view.php";  
