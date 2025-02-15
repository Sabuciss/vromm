<?php require "views/component/header.php";?> 
<?php require "views/component/navbar.php";?>

<h1><?= htmlspecialchars($category["category_name"])?></h1>

<button><a href="edit?id=<?=$category["id"] ?>">Rediģēt </a><button>
 
 <form method="POST" action="/delete" >
 <input name="id" value="<?= $category["category_id"]  ?>" type="hidden" />
    <input type="submit" value="dzest"/>
</form> 

<?php require "views/component/footer.php";?>
