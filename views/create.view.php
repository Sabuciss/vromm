<?php require "views/component/header.php";?> 
<?php require "views/component/navbar.php";?>

<h1>Izveido bloga ierakstu</h1>

<form method="POST" action="/store">
    <label>
        Nosaukums:
        <input type="text" name="title" value="<?= isset($title) ? htmlspecialchars($title) : '' ?>" required />
    </label>
    <br />

    <label>
        <textarea name="content" rows="5" required><?= isset($content) ? htmlspecialchars($content) : '' ?></textarea>
    </label>
    <br />
    <button type="submit">Izveidot</button>
</form>

<?php require "views/component/footer.php";?>