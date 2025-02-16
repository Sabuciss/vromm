<?php require "views/component/header.php"; ?>
<?php require "views/component/navbar.php"; ?>

<h1>Rediģēt bloga ierakstu</h1>

<div class="container">
    <form method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($post['id']) ?>" />

        <label for="category_id">Kategorija:</label>
        <select name="category_id" id="category_id">
            <option value="">Izvēlies kategoriju</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?= htmlspecialchars($category['id']) ?>" 
                    <?= ($post['category_id'] == $category['id']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($category['category_name']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <?php if (isset($errors["category_id"])): ?>
            <p class="error"><?= htmlspecialchars($errors["category_id"]) ?></p>
        <?php endif; ?>

        <label for="content">Saturs:</label>
        <input type="text" id="content" name="content" value="<?= htmlspecialchars($_POST['content'] ?? $post['content']) ?>" />
        
        <?php if (isset($errors["content"])): ?>
            <p class="error"><?= htmlspecialchars($errors["content"]) ?></p>
        <?php endif; ?>

        <button class="button" type="submit">Saglabāt izmaiņas</button>
    </form>
</div>

<?php require "views/component/footer.php"; ?>
