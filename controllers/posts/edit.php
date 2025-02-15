
<?php

require "Validator.php";

if(isset($_GET["id"])){
    $sql = "SELECT * FROM posts WHERE id = :id;"; 
    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    
    if (!Validator::string($_POST["content"], max: 50)){
    $errors["content"]= "Saturam ir jabut";
    }
   
    elseif (empty($errors)) {
        $sql = "UPDATE posts SET content = :content WHERE id = :id;";
        $params = ["id" => $_POST["id"], "content" => $_POST["content"] ];
        $post = $db->query($sql, $params)->fetch();

        header("Location: /show?id=" . $_POST["id"]);
        exit();
    }
}

 $pageTitle = "edits";
 $style = "css/kopejais-stils.css";
 require "views/posts/edit.view.php";
