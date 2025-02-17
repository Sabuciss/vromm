<?php 

require "Validator.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    
    // Validācija: pārbaudām, vai nosaukums ir derīgs
    if (!Validator::string($_POST["category_name"], min:3, max: 50)){
        $errors["category_name"] = "Kategorijai jābūt no 3 līdz 50 simboliem.";
    }

    // Ja nav kļūdu, ievadām jauno kategoriju datubāzē
    if (empty($errors)) { 
        $sql = "INSERT INTO categories (category_name) VALUES (:category_name)";
        $params = ["category_name" => $_POST["category_name"]];
        $db->query($sql, $params);

        header("Location: /categories/index");
        exit();
    }
}

$pageTitle = "Kategorijas pievienošana";
$style = "css/kopejais-stils.css";
require "views/categories/create.view.php"; 
?>
