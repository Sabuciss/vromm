<?php require "views/component/header.php"; ?>
<?php require "views/component/navbar.php"; ?>

<h1><?= htmlspecialchars($category["category_name"]) ?></h1>

<form method="POST" action="/categories/delete?id=<?= $category['id'] ?>">
    <button type="submit" >Dzēst kategoriju</button>
</form>

<?php require "views/component/footer.php"; ?>
