<?php



try{
  $db2 = new PDO ("mysql:host=localhost;dbname=zuzu","root","");
  $query2 = $db2->prepare("SELECT * FROM ordergegevens");
  $query2->execute();
  $result2 = $query2->fetchAll(PDO::FETCH_ASSOC);
  foreach($result2 as &$data2){
    echo "Number of the first maki is  " . $data2 ["maki_1"] . " <br>" ."<br>";
    echo "Number of the second make is ".$data2 ["maki_2"] . " <br>" . "<br>";
    echo "Number of Nigiri is ".$data2 ["nigiri"] . "<br> " . "<br>";
    echo "Number of Philadephia is ".$data2 ["philadephia"] . "<br> " . "<br>";
    echo "Number of Spicy " . $data2 ["spicy"] . "<br> " ."<br>";
    echo "Number of California is ". $data2 ["california"] . "<br> " . "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
  }

}catch(PDOException $ee){
  die("stop error" . $ee->getMessage());
}

?>