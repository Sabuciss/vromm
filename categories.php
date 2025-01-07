<?php
echo "<style>
body{
    background: rgb(76,40,98);
    background: linear-gradient(90deg, rgba(76,40,98,1) 0%, rgba(93,29,124,1) 35%, rgba(125,17,186,1) 100%);
color: white ;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
text-align: left;

}
</style>";

require "functions.php";
require "Database.php";

$config = require("config.php");

$db = new Database($config["database"]);

$select = "SELECT * FROM categories"; 

$params = [];
if (isset($_GET["search_query"])  && $_GET["search_query"] != ""){
    echo "Atgriest ierakstus";
    $search_query = "%" . $_GET["search_query"] . "%";
    $select .= " WHERE category_name LIKE  :nosaukums"; 
    $params = ["nosaukums" => $search_query];                 
}
 $categories = $db->query($select, $params)->fetchAll();


echo "<h1>HELLOOO THEREEE </h1>";

echo "<form >";
echo "<input name='search_query' />"; 
echo "<button>Meklēt</button>";
echo "</form>";

if (count($categories) == 0 ){
    echo "Not found. its dead 😎";
}

echo "<ul>";
foreach($categories as $category){
    echo"<li>" . $category["category_name"] . "</li>";  
   }
echo "</ul>";



?>

