<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=zuzu","root","");
    $query = $db->prepare("SELECT * FROM klantgegevens");
    $query-> execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

  
    foreach($result as &$data){
      echo "Naam  is :  = " .  $data ["name"] . " <br>" . "<br>" ;
      echo "Achter naam is : " .  $data ["last_name"] . " <br>" . "<br>" ;
      echo "Email is : " .  $data ["email"] . " <br>" ."<br>";
      echo "Adres is : " .  $data ["adress"] . " <br>" . "<br>" ;
      echo "Post Code is : " .  $data ["zip_code"] . " <br>" . "<br>" ;
      echo "Woonplaats is : " .  $data ["plates"] . " <br>" . "<br>" ;
      echo "<br>" . "<br>";
      echo "<br>" ."<br>";
    }
    
}catch(PDOException $e){
    die("Stop er is een Error :  ". $e->getMessage());

}

?>
