<?php require "views/component/header.php"; ?>
<?php require "views/component/navbar.php"; ?>

<h1>Rediģēt kategoriju</h1>
<div class="container">
    <form method="POST">
        <input type="hidden" name="id" value="<?= $category['id'] ?>" />
        <label for="category_name">Kategorijas nosaukums:</label>
        <input type="text" id="category_name" name="category_name" value="<?= htmlspecialchars($category['category_name']) ?>" required />
        <button type="submit">Saglabāt izmaiņas</button>
    </form>

    <form method="POST" action="/categories/delete">
        <button type="submit"  >Dzēst kategoriju</button>
    </form>
</div>

<?php require "views/component/footer.php"; ?>
