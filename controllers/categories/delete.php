<?php

$sql = "DELETE FROM categories WHERE id = :id;"; 

$params = ["id" => $_POST["category_id"]]; // Ensure id is coming from a valid POST request

 $db->query($sql, $params); // No need for fetch() since DELETE doesn't return rows

header("Location: /categories/index.php");
exit();

 $pageTitle = "edits";
 $style = "css/kopejais-stils.css";
 require "views/posts/edit.view.php";
