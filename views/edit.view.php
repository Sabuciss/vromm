<?php require "views/component/header.php"; ?>
<?php require "views/component/navbar.php"; ?>

<h1>Rediģēt ierakstu</h1>

<div class="container">
    <form method="POST" action="/edit.php">
        <input type="hidden" name="id" value="<?= htmlspecialchars($post["id"]) ?>">

        <label for="content">Saturs</label>
        <input 
            type="text" id="content"  name="content" value="<?= htmlspecialchars($post["content"] ?? '') ?>" 
        >

        <button type="submit">Saglabāt</button>
    </form>
</div>

<?php require "views/component/footer.php"; ?>
