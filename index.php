<?php
echo "<style>
body{
background-color: #8e809c;
color: #c3c8e3 ;
}
</style>";

echo "Hi there  <br><br>";
// 1. Izveido datu bāzi ar tabulu
// ielogošanās
//Publicēt -> savienot ar datubāzi
// 2.Savienot php ar datu bāzi  db nosaukums , parole, lietotajvards  mysql_connect

// data source name
$dsn= "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";

//PDO - php Data object
$pdo = new PDO($dsn);

//3.Izvadīt datus uz html
   //3.1. sagatavot vaicājumu(statement)
$statement = $pdo->prepare("SELECT * FROM posts");
   //3.2. izpildīt statement
$statement->execute();
   //3.3. dabut rezultatus
$posts = $statement->fetchAll();

dd($posts);

// Dump and die
function dd($data){
    echo"<pre>";// sakarto daudz skaidrak datus kas ir tikti izvadīti
    var_dump($data);
    echo"</pre>";
    die();
}

?>