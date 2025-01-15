<?php require "views/component/header.php";?> 
<?php require "views/component/navbar.php";?>

<h1>Izveido bloga ierakstu</h1>

<form method="POST">
    <label>
        <textarea name="content" required><?= isset($content) ? htmlspecialchars($content) : '' ?></textarea>
    </label>
    <?php if (isset($errors["content"])): ?>
        <p class="error-message"><?= htmlspecialchars($errors["content"]) ?></p>
    <?php endif; ?>
    <button type="submit">Izveidot</button>
</form>

<?php require "vromm/views/component/footer.php";?>