<?php

require "Validator.php";

if (!isset($_GET["id"]) || empty($_GET["id"])) {
    die("Ieraksta ID nav padots!"); 
}
$id = intval($_GET["id"]);

$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $id];

$post = $db->query($sql, $params)->fetch();

if (!$post) {
    die("Ieraksts netika atrasts!"); 
}

$pageTitle = "Edits";
$style = "css/kopejais-stils.css";

require "views/posts/edit.view.php";
