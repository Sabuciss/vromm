<?php

$sql = "DELETE FROM categories WHERE id = :id;"; 

$params = ["id" => $_POST["category_id"]]; 

 $db->query($sql, $params);

header("Location: /categories/index.php");
exit();

 $pageTitle = "edits";
 $style = "css/kopejais-stils.css";
 require "views/posts/edit.view.php";
