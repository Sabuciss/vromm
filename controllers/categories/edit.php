
<?php

require "Validator.php";

if(isset($_GET["id"])){
    $sql = "SELECT * FROM categories WHERE id = :id;"; 
    $params = ["id" => $_GET["id"]];
    $category = $db->query($sql, $params)->fetch();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    
    if (!Validator::string($_POST["category_name"], max: 50)){
    $errors["category_name"]= "Saturam ir jabut";
    }
   
    elseif (empty($errors)) {
        $sql = "UPDATE categories SET category_name = :category_name WHERE id = :id;";
        $params = ["id" => $_POST["id"], "category_name" => $_POST["category_name"] ];
        $category = $db->query($sql, $params)->fetch();

        header("Location: /categories/show?id=" . $_POST["id"]);
        exit();
    }
}

 $pageTitle = "Kategorijas edits";
 $style = "css/kopejais-stils.css";
 require "views/categories/edit.view.php";
