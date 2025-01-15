<?php

require "functions.php";
require "Database.php";

$config = require("config.php");

$db = new Database($config["database"]);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'] ?? '';

    // Sagatavojam un izpildām SQL vaicājumu
    $sql = "INSERT INTO posts (content) VALUES (:content)";
    $params = ["content" => $content];
    $db->query($sql, $params);

    // Novirzām lietotāju uz bloga ierakstu sarakstu
    header("Location: /");
    exit();
}
$pageTitle = "ierakstss";
$style = "css/style1.css";

require "views/posts/create.view.php";
