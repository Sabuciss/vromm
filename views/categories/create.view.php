<?php require "views/component/header.php"; ?>
<?php require "views/component/navbar.php"; ?>

<h1>Izveido kategoriju</h1>
<div class="container">
    <form method="POST">
        <label for="name">
            Kategorijas nosaukums:
            <input type="text" name="category_name" id="category_name" value="<?= htmlspecialchars($_POST['category_name'] ?? '') ?>" required>
        </label>

        <button class="button" type="submit">Izveidot</button>

        <?php if (isset($errors["category_name"])): ?>
            <p class="error"><?= htmlspecialchars($errors["category_name"]) ?></p>
        <?php endif; ?>
    </form>
</div>

<?php require "views/component/footer.php"; ?>
