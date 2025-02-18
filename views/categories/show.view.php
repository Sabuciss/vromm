<?php require "views/component/header.php"; ?>
<?php require "views/component/navbar.php"; ?>

<?php if (isset($category) && is_array($category)) { ?>
    <h1><?= htmlspecialchars($category["category_name"]) ?></h1>

    <a href="edit?id=<?= htmlspecialchars($category["id"]) ?>">Rediģēt</a>
    <form method="POST" action="/categories/delete">
        <input type="hidden" name="id" value="<?= htmlspecialchars($category["category_name"]) ?>" />
        <button type="submit">Dzēst kategoriju</button>
    </form>
<?php } else { ?>
    <p>Kategorija nav atrasta.</p>
<?php } ?>

<?php require "views/component/footer.php"; ?>
