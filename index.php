<?php
echo "<style>
body{
background-color: #8e809c;
color: #c3c8e3 ;
}
</style>";

require "functions.php";
require "Database.php";

echo "Hi there  <br><br>";
// 1. Izveido datu bāzi ar tabulu
// ielogošanās
//Publicēt -> savienot ar datubāzi
// 2.Savienot php ar datu bāzi  db nosaukums , parole, lietotajvards  mysql_connect
//3.Izvadīt datus uz html

$db = new Database();
$posts = $db->query("SELECT * FROM posts");



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
