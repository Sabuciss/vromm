<?php

if(!isset($_GET["id"]) || $_GET["id"] == ""){
 redirectIFNotFound();
    
}
   $sql = "SELECT * FROM posts WHERE id = :id";
    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();

if(!$post){
    redirectIFNotFound();
}
require "views/categories/show.view.php";
