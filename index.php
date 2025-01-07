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
 //  SELECT * FROM posts WHERE content LIKE \ 'slipsvitra ka to var izbeigt
$db = new Database($config["database"]);

$select = "SELECT * FROM posts"; 

$params = [];//drošībai, lai db nevrētu izdzest kk random lietotājs
if (isset($_GET["search_query"])  && $_GET["search_query"] != ""){
    echo "Atgriest ierakstus";
    $search_query = "%" . $_GET["search_query"] . "%";
    $select .= " WHERE content LIKE  :nosaukums"; //sql saistītie vaicājumi un parametri   sagatavaotais vaicājums
    $params = ["nosaukums" => $search_query];   //pats paramets                  
}
 $posts = $db->query($select, $params)->fetchAll();//lai nav jaraksta parak daudz citas metodes -fetchall


echo "<h1>Blogs</h1>";

echo "<form >";// post un get ir jau nokluseta 
echo "<input name='search_query' />"; //url parametrs lai php atpazītu
echo "<button>Meklēt</button>";//inputiem mazakas css iespējas so poga ir labaka, teksta vieta var likt svg vai bildes and all
echo "</form>";

if (count($posts) == 0 ){
    echo "Not found. its dead 😎";
}

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
