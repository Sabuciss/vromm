<?php

require "Validator.php";
require "Database.php";

$config = require("config.php");
$db = new Database($config["database"]);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!Validator::string($_POST["content"], max: 50)) {
        die("Saturs nav derīgs.");
    }

    if (!is_numeric($_POST["id"])) {
        die("ID nav derīgs.");
    }

    $sqlCheck = "SELECT * FROM posts WHERE id = :id";
    $post = $db->query($sqlCheck, ["id" => $_POST["id"]])->fetch();
    if (!$post) {
        die("Ieraksts ar norādīto ID neeksistē.");
    }

    $sqlUpdate = "UPDATE posts SET content = :content WHERE id = :id";
    $db->query($sqlUpdate, [
        "content" => $_POST["content"],
        "id" => $_POST["id"]
    ]);

    header("Location: /show?id=" . $_POST["id"]);
    exit();
}

header("Location: /");
exit();

 $pageTitle = "edits";
 require "views/edit.view.php";

