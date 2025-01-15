<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $sql = "INSERT INTO posts (content) VALUES (:content)";
    $params = ["content" =>$_POST["content"]];
    $post = $db->query($sql, $params)->fetchAll();

    header("Location: /");
    exit();
}
$pageTitle = "ierakstss";
$style = "css/style1.css";

require "views/posts/create.view.php";

dd($_SERVER['REQUEST_METHOD']);
