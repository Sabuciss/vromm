<?php require "views/component/header.php";?> 
<?php require "views/component/navbar.php";?>

<h1><?= htmlspecialchars($post["content"])?></h1>

<p><strong>Kategorija:</strong> <?= $post['category_name'] ?? "Nav kategorijas" ?></p><!--Null pārbaude (??) – Ja category_name nav, parādīs "Nav kategorijas".-->

<button class="button"><a href="edit?id=<?=$post["id"] ?>">Rediģēt </a><button>
 
 <form method="POST" action="/delete" >
 <input name="id" value="<?= $post["id"]  ?>" type="hidden" />
    <input type="submit" value="dzest"/>
</form> 

<?php require "views/component/footer.php";?>
