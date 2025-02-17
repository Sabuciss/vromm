<?php
require "Database.php";
require "Validator.php";

if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];

    $sql = "SELECT * FROM categories WHERE id = :id";
    $category = $db->query($sql, ['id' => $categoryId])->fetch();

    if (!$category) {
        die("Kategorija netika atrasta.");
    }
} else {
    die("Kategorijas ID nav norādīts.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['category_name']) && !empty($_POST['category_name'])) {
        $categoryName = $_POST['category_name'];

        if (!Validator::string($categoryName, min: 3, max: 50)) {
            $errors['category_name'] = "Kategorijas nosaukumam jābūt no 3 līdz 50 rakstzīmēm.";
        } else {
            $sql = "UPDATE categories SET category_name = :category_name WHERE id = :id";
            $db->query($sql, ['category_name' => $categoryName, 'id' => $categoryId]);

            header("Location: /categories/show?id=" . $categoryId);
            exit();
        }
    } else {
        $errors['category_name'] = "Kategorijas nosaukums ir nepieciešams.";
    }
}

$pageTitle = "Kategorijas rediģēšana";
$style = "css/kopejais-stils.css";
require "views/categories/edit.view.php";
?>
