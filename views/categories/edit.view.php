<?php require "views/component/header.php"; ?>
<?php require "views/component/navbar.php"; ?>

<h1>Rediģēt bloga ierakstu</h1>
<div class="container">
    <form method="POST">
        
        <input type="hidden" name="id" value="<?= $category['id'] ?>" />

        <label for="category_id">Kategorija:</label>
        <select id="category_id" name="category_id">
        
            <?php foreach ($categories as $category_option): ?>
                <option value="<?= $category_option['id'] ?>" 
                    <?= ($category['id'] == $category_option['id']) ? 'selected' : '' ?>>
                    <?= $category_option['category_name'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        
        <?php if (isset($errors["category_id"])): ?>
            <p class="error"><?= $errors["category_id"] ?></p>
        <?php endif; ?>

        <label for="content">Saturs:</label>
        <input type="text" id="content" name="content" value="<?= $_POST['content'] ?? $category['category_name'] ?>" />
        
        <?php if (isset($errors["content"])): ?>
            <p class="error"><?= $errors["content"] ?></p>
        <?php endif; ?>

        <button class="button" type="submit">Saglabāt izmaiņas</button>
    </form>
</div>

<?php require "views/component/footer.php"; ?>
