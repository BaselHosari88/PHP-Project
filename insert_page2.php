<?php

try{
    $db3 = new PDO("mysql:host=localhost;dbname=zuzu","root","");
  
  $query3 = $db3->prepare("INSERT INTO ordergegevens(maki_1,maki_2,nigiri,philadephia,spicy,california) VALUES (:maki_1, :maki_2, :nigiri, :philadephia, :spicy, :california)");
  $query3->bindParam("maki_1", $Maki1);
  $query3->bindParam("maki_2", $Maki2);
  $query3->bindParam("nigiri", $Nigiri);
  $query3->bindParam("philadephia", $Philadephia);
  $query3->bindParam("spicy", $Spicy);
  $query3->bindParam("california", $California);
  if($query3->execute()){
    echo " De nieuwe gegevens zijn toegevoegd";
  }else{
    echo "Er is een fout opgetreden";
  }
  echo "<br>";
  
  }catch(PDOEXception $ea){
    die("stop Error in data connecting " . $ea->getMessage());
  }
  