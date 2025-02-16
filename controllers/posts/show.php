<?php

require "Database.php";

if(!isset($_GET["id"]) || $_GET["id"] == ""){
 redirectIFNotFound();
    
}
    $post = $_GET["id"];    

    $sql = "SELECT posts.*, categories.category_name 
    FROM posts
    LEFT JOIN categories ON posts.category_id = categories.id
    WHERE posts.id = :id";
    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();

if(!$post){
    redirectIFNotFound();
}
$pageTitle ="Postii";
$style = "css/kopejais-stils.css";
require "views/categories/show.view.php";
