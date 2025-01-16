<?php require "component/header.php";?>
<?php require "component/navbar.php";?>
 <h1>Blogs</h1>
 <div class="container">
  <form >
    <input name='search_query' value='<?= $_GET["search_query"] ?? ""?>'  />
    <button>Meklēt</button>
  </form>

<?php if (count($categories) == 0 ){ ?>
   <p>Not found. its dead 😎</p>
<?php } ?>

  <ul>
    <?php foreach($categories as $category){ ?>
    <li><?= $category["category_name"] ?></li>
    <?php   } ?>
  </ul>
</div>
  <?php require "component/footer.php";?>
