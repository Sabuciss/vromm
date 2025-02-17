<?php require "views/component/header.php"; ?>
<?php require "views/component/navbar.php"; ?>

<h1>Kategorijas</h1>

<ul>
    <?php foreach ($categories as $category): ?>
        <li>
            <a href="/categories/edit?id=<?= urlencode($category['id']) ?>">
                <?= htmlspecialchars($category["category_name"]) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php require "views/component/footer.php"; ?>
