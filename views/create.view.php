<?php require "views/component/header.php";?> 
<?php require "views/component/navbar.php";?>

<h1>Izveido bloga ierakstu</h1>

<form method="POST">
    <label>
        <input name="content" value="<?=htmlspecialchars($_POST['content'] ?? '')?> " ></input><button class="button"type="submit">Izveidot</button>
    </label>
    <?php if (isset($errors["content"])): ?>
        <p class="error"><?= htmlspecialchars($errors["content"]) ?></p>
    <?php endif; ?>
    
</form>

<?php require "views/component/footer.php";?>
