<?php

require "Validator.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    
    if (!Validator::string($_POST["category_name"], min:3 , max: 50)){ //kad nepieciešams ilgtermiņā piešķirt kk īpašību, kopīgota starp vairākām metodēm
        $errors["category_name"] = "Kategorijai ir jabut";
    }
   
    elseif (empty($errors)) { //ja nav kļudu tad ievada db
        $sql = "INSERT INTO categories (category_name) VALUES (:category_name)";
        $params = ["category_name" => $_POST["category_name"]];
        $db->query($sql, $params);

        header("Location: /");
        exit();
    }
}

$pageTitle = "Kategorijas ieraksts";
require "views/categories/create.view.php";
