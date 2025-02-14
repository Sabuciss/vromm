<?php

if(!isset($_GET["id"]) || $_GET["id"] == ""){
 redirectIFNotFound();
    
}
   $sql = "SELECT posts.*, categories.category_name FROM posts
           LEFT JOIN categories
           ON posts.category_id = categories.id
           WHERE posts.id = 1;";
    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();

if(!$post){
    redirectIFNotFound();
}
$pageTitle ="kategorijas";
$style = "css/kopejais-stils.css";
require "views/posts/show.view.php";
