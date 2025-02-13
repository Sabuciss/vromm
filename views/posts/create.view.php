<?php require "views/component/header.php"; ?> 
<?php require "views/component/navbar.php"; ?>

<h1>Izveido bloga ierakstu</h1>
<div class="container">
    <form method="POST">
       
        <div>
            <label for="category_id">Kategorija:</label>
            <select id="category_id" name="category_id">
                <option value=""> kategorija</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['id'] ?>" 
                        <?= (isset($_POST['category_id']) && $_POST['category_id'] == $category['id']) ? 'selected' : '' ?>>
                        <?= $category['category_name'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <?php if (isset($errors["category_id"])): ?>
                <p class="error"><?= $errors["category_id"] ?></p>
            <?php endif; ?>
        </div>

        <div>
            <label for="content">Saturs:</label>
            <textarea id="content" name="content"><?= $_POST['content'] ?? '' ?></textarea>
            <?php if (isset($errors["content"])): ?>
                <p class="error"><?= $errors["content"] ?></p>
            <?php endif; ?>
        </div>

        <button class="button" type="submit">Izveidot</button>
    </form>
</div>

<?php require "views/component/footer.php"; ?>
