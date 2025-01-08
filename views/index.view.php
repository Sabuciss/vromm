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
    <input name='search_query' />
    <button>Meklēt</button>
  </form>

<?php if (count($posts) == 0 ){ ?>
   <p>Not found. its dead 😎</p>
<?php } ?>

  <ul>
    <?php foreach($posts as $post){ ?>
    <li><?= $post["content"] ?></li> <!-- php echo-->
    <?php   } ?>
  </ul>
</body>
</html>



