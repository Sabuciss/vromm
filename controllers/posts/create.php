
<?php

require "Validator.php";

$sql = "SELECT * FROM categories";
$categories = $db->query($sql, [])->fetchAll();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!Validator::string($_POST["content"], max: 50)) {
        $errors["content"] = "Saturam ir jābūt.";
    }

    if (!empty($_POST["category_id"]) && !Validator::number($_POST["category_id"])) {
        $errors["category_id"] = "Nederīgs kategorijas ID.";
    }

    if (empty($errors)) {
        $sql = "INSERT INTO posts (content, category_id) VALUES (:content, :category_id)";
        $params = ["content" => $_POST["content"],"category_id" => $_POST["category_id"] ?: null];
        $db->query($sql, $params);

        header("Location: /");
        exit();
    }
}
$pageTitle = "ierakstss";
$style = "css\kopejais-stils.css";

require "views/posts/create.view.php";
