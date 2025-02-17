<?php

require "Database.php";

    $sql = "SELECT * FROM categories WHERE id = :id ;";
    $params = ["id" => $_GET["id"]];
    $category = $db->query($sql, $params)->fetch();

if(!$post){
    redirectIFNotFound();
}

$pageTitle ="kategorijas";
$style = "/css/kopejais-stils.css";
require "views/posts/show.view.php";
