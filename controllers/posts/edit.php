
<?php

require "Validator.php";
   
$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();


$pageTitle = "Edits";
$style = "css/kopejais-stils.css";

require "views/posts/edit.view.php";
