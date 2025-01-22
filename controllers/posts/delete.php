<?php

require "Database.php";

$config = require("config.php");
$db = new Database($config["database"]);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!is_numeric($_POST["id"])) {
        die("ID nav derīgs.");
    }

    $sqlCheck = "SELECT * FROM posts WHERE id = :id";
    $post = $db->query($sqlCheck, ["id" => $_POST["id"]])->fetch();

    if (!$post) {
        die("Ieraksts ar norādīto ID neeksistē.");
    }

    $sqlDelete = "DELETE FROM posts WHERE id = :id";
    $db->query($sqlDelete, ["id" => $_POST["id"]]);

    header("Location: /");
    exit();
}

header("Location: /");
exit();