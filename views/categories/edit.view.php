<?php require "views/component/header.php"; ?>
<?php require "views/component/navbar.php"; ?>

<h1>Rediģēt bloga ierakstu</h1>
<div class="container">
    <form method="POST">
        
        <label for="category_id">Kategorija:</label>
        <select id="category_id" name="category_id">
                <option value=""> ...</option>
                <option value=""> Freestyle</option>
                <option value=""> Sports</option>
                <option value=""> Svētki</option>
                <option value=""> Mūzika</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['id'] ?>" 
                    <?= ($post['category_id'] == $category['id']) ? 'selected' : '' ?>>
                    <?= $category['category_name'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <?php if (isset($errors["category_id"])): ?>
            <p class="error"><?= $errors["category_id"] ?></p>
        <?php endif; ?>

        <label for="content">Saturs:</label>
        <input type="text" id="content" name="content" value="<?= $_POST['content'] ?? $post['content'] ?>" />
        <?php if (isset($errors["content"])): ?>
            <p class="error"><?= $errors["content"] ?></p>
        <?php endif; ?>

        <button class="button" type="submit">Saglabāt izmaiņas</button>
    </form>
</div>

<?php require "views/component/footer.php"; ?>