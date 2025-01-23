<?php

        $sql = "DELETE into posts  WHERE id = :id;";
        
        $params = ["id" => $_POST["id"]];
        
        $post = $db->query($sql, $params)->fetch();

        header("Location: /");
        exit();

 $pageTitle = "edits";
 $style = "css/kopejais-stils.css";
 require "views/posts/edit.view.php";
