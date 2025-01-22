<?php require "views/component/header.php"; ?>
<?php require "views/component/navbar.php"; ?>

<h1>Rediģēt ierakstu</h1>
<div class="container">
    <form method="POST" action="update.php">
        <input type="hidden" name="id" value="<?= htmlspecialchars($post['id']) ?>">
        
        <div>
            <label for="title">Virsraksts:</label>
            <input type="text" id="title" name="title" value="<?= htmlspecialchars($post['title']) ?>" required>
        </div>
        
        <div>
            <label for="content">Saturs:</label>
            <textarea id="content" name="content" rows="10" required><?= htmlspecialchars($post['content']) ?></textarea>
        </div>
        
        <button type="submit">Saglabāt izmaiņas</button>
    </form>
</div>

<?php require "views/component/footer.php"; ?>

