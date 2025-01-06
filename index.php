<?php
echo "<style>
body{
background-color: #8e809c;
color: #c3c8e3 ;
}
</style>";

require "functions.php";
require "Database.php";

//uztaisīt filtru - ierakstu meklēšana
//1. izveido meklešanas joslu html formu, kura ir input, submit poga
//2. kaut ka sarakstīti php
//3. atgriest datus no sql datu bāzes

$config = require("config.php");

echo "Hi there  <br><br>";
// 1. Izveido datu bāzi ar tabulu
// ielogošanās
//Publicēt -> savienot ar datubāzi
// 2.Savienot php ar datu bāzi  db nosaukums , parole, lietotajvards  mysql_connect
//3.Izvadīt datus uz html

$db = new Database($config["database"]);

$posts = $db->query("SELECT * FROM posts")->fetchAll();//lai nav jaraksta parak daudz citas metodes -fetchall

//var_dump(isset($_GET["search_query"]));
if(isset($_GET["search_query"])  && $_GET["search_query"] != ""){
    echo "Atgriest ierakstus";
    // TODO: iegut filtrētos ierakstus
    $posts = $db->query("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] .  "%';")->fetchAll();
}

echo "<h1>Blogs</h1>";

echo "<form >";// post un get ir jau nokluseta 
echo "<input name='search_query' />"; //url parametrs
echo "<button>Meklēt</button>";//inputiem mazakas css iespējas so poga ir labaka, teksta vieta var likt svg vai bildes and all
echo "</form>";

//3.3. dabut rezultatus
//$posts = $statement->fetchAll(PDO::FETCH_ASSOC); // konstante 2 = PDO::FETCH_ASSOC      

//dd($posts[0]["content"]);//dd($posts[0]["content"]);dd($posts[0]);

//ar foreach izvada content
echo "<ul>";
foreach($posts as $post){
    
    //echo "$post[content]<br>"; var ari šādi
    echo"<li>" . $post["content"] . "</li>";   //kā pareizi jaraksta ul li listi br vieta
   }
echo "</ul>";



   


?>
