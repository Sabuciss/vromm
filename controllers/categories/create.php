<?php

require "Validator.php";

$sql = "SELECT * FROM categories";
$categories = $db->query($sql)->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    
    if (!Validator::string($_POST["content"], min: 3, max: 50)) {
        $errors["content"] = "Saturam ir jābūt, bet ne garākam par 50 rakstzīmēm.";
    }

    // Validācija kategorijai ja ir izvēlēta derīga kategorija
    if (empty($_POST["category_id"]) || !is_numeric($_POST["category_id"])) {
        $errors["category_id"] = "Lūdzu, izvēlies derīgu kategoriju.";
    }

    if (empty($errors)) { // Ja nav kļūdu, saglabā datus datu bāzē
        $sql = "INSERT INTO posts (content, category_id) VALUES (:content, :category_id)";
        $params = [
            "content" => $_POST["content"],
            "category_id" => $_POST["category_id"]
        ];
        $db->query($sql, $params);

        header("Location: /");
        exit();
    }
}

$pageTitle = "Pievienot ierakstu";
$style = "css/kopejais-stils.css";

require "views/posts/create.view.php";
