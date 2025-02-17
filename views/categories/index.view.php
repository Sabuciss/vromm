<?php require "views/component/header.php"; ?>
<?php require "views/component/navbar.php"; ?>

<h1>Kategorijas</h1>

<ul>
    <?php foreach ($categories as $category): ?>
        <li>
            <!-- Saites uz rediģēšanu (kategorija tiek nosūtīta ar ID) -->
            <a href="edit.php?id=<?= urlencode($category['id']) ?>">
                <?= htmlspecialchars($category["category_name"]) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php require "views/component/footer.php"; ?>
