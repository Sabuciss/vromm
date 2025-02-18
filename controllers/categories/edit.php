<?php
require "Database.php";
require "Validator.php";

if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];

    $sql = "SELECT * FROM categories WHERE id = :id";
    $category = $db->query($sql, ["id" => $categoryId])->fetch();

    }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 

        if (!Validator::string($_POST["category_name"], min: 3, max: 50)) {
            $errors['category_name'] = "Kategorijas nosaukumam jābūt no 3 līdz 50 rakstzīmēm.";
        } else {
            $sql = "UPDATE categories SET category_name = :category_name WHERE id = :id";
           $params =  ["category_name" => $_POST["category_name"], "id" => $_POST["id"]];
           $category = $db->query($sql, $params)->fetch();

            header("Location: /categories/index");
            exit();
        }
}


$pageTitle = "Kategorijas rediģēšana";
$style = "css/kopejais-stils.css";
require "views/categories/edit.view.php";
?>
