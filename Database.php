<?php

class Database {
    public function query($sql){
       // data source name
        $dsn= "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";

        //PDO - php Data object
        $pdo = new PDO($dsn); // ta ir class ar objekts    objekts kas pieder pdo klasei
      
        //3.1. sagatavot vaicājumu(statement)
        $statement = $pdo->prepare($sql);  //prepare if funkcijas metode
        //3.2. izpildīt statement
        $statement->execute();

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);  //vajadz igie dati
        return $data;


    }

};