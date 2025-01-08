<!DOCTYPE html>
<html lang="lv">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blog</title>
   <link rel="stylesheet" href="css/style1.css">
</head>
<body>
 <h1>Blogs</h1>

  <form >
    <input name='search_query' value='<?= $_GET["search_query"] ?? ""?>'  />
    <button>Meklēt</button>
  </form>

<?php if (count($categories) == 0 ){ ?>
   <p>Not found. its dead 😎</p>
<?php } ?>

  <ul>
    <?php foreach($categories as $category){ ?>
    <li><?= $category["search_query"] ?></li>
    <?php   } ?>
  </ul>

</body>
</html>