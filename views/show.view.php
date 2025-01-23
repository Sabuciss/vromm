<?php require "views/component/header.php";?> 
<?php require "views/component/navbar.php";?>

<h1><?= htmlspecialchars($post["content"])?></h1>

<a href="edit?id=<?=$post["id"] ?>">Rediģēt </a>
<!-- <form method="POST" action="/delete.php" onsubmit="return confirm('Vai tiešām vēlaties dzēst šo ierakstu?');">
    <input type="hidden" name="id" value="<?= htmlspecialchars($post['id']) ?>">
    <button type="submit">Dzēst</button>
</form> -->
<?php require "views/component/footer.php";?>
