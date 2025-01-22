<?php require "views/component/header.php";?> 
<?php require "views/component/navbar.php";?>

 <h1><?= htmlspecialchars($post["content"])?></h1>
<a href="edit?id=<?= htmlspecialchars($post["id"]) ?>">Rediģēt </a>


<?php require "views/component/footer.php";?>



