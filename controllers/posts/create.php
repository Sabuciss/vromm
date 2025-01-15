<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    
    if (!isset($_POST["content"]) || strlen(trim($_POST["content"])) == 0 || strlen($_POST["content"]) > 50) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm.";
    }

    if (empty($errors)) { //ja nav kļudu tad ievada db
        $sql = "INSERT INTO posts (content) VALUES (:content)";
        $params = ["content" => $_POST["content"]];
        $db->query($sql, $params);

        header("Location: /");
        exit();
    }
}

$pageTitle = "ierakstss";
$style = "css/kopejais-stils.css";

require "vroom/views/posts/create.view.php";
