<?php require "views/component/header.php";?> <!-- p h p ir jabut lai stradatu-->
<?php require "views/component/navbar.php";?>
 <h1>Kategorijasss</h1>

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
      <li><a href="show?id=<?= $category["id"]?>"> <?= htmlspecialchars($category["content"])?></a></li> 
      <?php   } ?>
   </ul>
</div>

  <?php require "views/component/footer.php";?>
