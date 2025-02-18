<?php require "views/component/header.php"; ?>
<?php require "views/component/navbar.php"; ?>

<h1><?= htmlspecialchars($category["category_name"]) ?></h1>

<a href="edit?id=<?= htmlspecialchars($category["id"]) ?>">Rediģēt</a>
<form method="POST" action="/controllers/categories/delete.php">
    <input type="hidden" name="id" value="<?= isset($category["id"]) ? htmlspecialchars($category["id"]) : '' ?>" />
    
    <button type="submit">Dzēst kategoriju</button>


<?php require "views/component/footer.php"; ?>
