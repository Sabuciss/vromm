<?php

require "Validator.php";

if(isset($_GET["id"])){
    $sql = "SELECT * FROM posts WHERE id = :id;"; 
    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    
    if (!Validator::string($_POST["content"], max: 50)){
        $errors["content"]= "Saturam ir jābūt";
    }
   
    elseif (empty($errors)) {
        $sql = "UPDATE posts SET content = :content, category_id = :category_id WHERE id = :id;";
        $params = [
            "id" => $_POST["id"], 
            "content" => $_POST["content"],
            "category_id" => $_POST["category_id"]
        ];
        $db->query($sql, $params);

        header("Location: /show?id=" . $_POST["id"]);
        exit();
    }
}

$sql = "SELECT * FROM categories";
$categories = $db->query($sql, []); 

$pageTitle = "Edit";
$style = "css/kopejais-stils.css";
require "views/posts/edit.view.php";
