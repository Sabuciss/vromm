<?php require "component/header.php";?> <!-- p h p ir jabut lai stradatu-->
<?php require "component/navbar.php";?>
 <h1>Blogs</h1>

  <form >
    <input name='search_query' value='<?= $_GET["search_query"] ?? ""?>'  />
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
  <!--
     1. if else
     if(isset($x)){
        $y =$x;
     }
     else{
        $y = "nav vertibas";
     }

     2. ternary operator trīškārsais operators
     $y = isset($x) ? $x : "nav vertibas";

     3. null coalescing operator
     $y = $x ?? "nav vertibas";  simtactic sugar


  -->
</body>
</html>



