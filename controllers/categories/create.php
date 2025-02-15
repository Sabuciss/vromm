<?php

require "Validator.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    
    if (!Validator::string($_POST["content"], min:3, max: 50)){ 
        $errors["content"] = "Saturam ir jabut, bet ne garākam par 50 rakstzīmēm";
    }
   
    elseif (empty($errors)) {
        $sql = "INSERT INTO posts (content) VALUES (:content)";
        $params = ["content" => $_POST["content"]];
        $db->query($sql, $params);

        header("Location: /");
        exit();
    }
}

$pageTitle = "ierakstss";
$style = "css/kopejais-stils.css";

require "views/categories/create.view.php";
