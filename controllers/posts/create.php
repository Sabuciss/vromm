
<?php

require "Validator.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    
    if (!Validator::string($_POST["content"], max: 50)){ //kad nepieciešams ilgtermiņā piešķirt kk īpašību, kopīgota starp vairākām metodēm
        $errors["content"] = "Saturam ir jabut, bet ne garākam par 50 rakstzīmēm";
    }
   
    elseif (empty($errors)) { //ja nav kļudu tad ievada db
        $sql = "INSERT INTO posts (content) VALUES (:content)";
        $params = ["content" => $_POST["content"]];
        $db->query($sql, $params);

        header("Location: /");
        exit();
    }
}

if(!$post){
    redirectIFNotFound();
}

$pageTitle = "ierakstss";
$style = "css/kopejais-stils.css";

require "views/posts/create.view.php";
