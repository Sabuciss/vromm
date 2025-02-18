<?php
require "Database.php";

if(isset($_POST["id"])){
$sql ="DELETE FROM posts WHERE id = :id;";
$params = ["id" => $_POST["id"]]; 
$post = $db->query($sql, $params); 
}
if (!$post) {
    die("Category not found");
}

header("Location: /categories");
exit();


 $pageTitle = "edits";
 $style = "css/kopejais-stils.css";
 require "views/categories/edit.view.php";
