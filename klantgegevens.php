<?php
$melding = "";


try{
  $db = new PDO ("mysql:host=localhost;dbname=zuzu","root","");



  if(isset($_POST['submit'])){
    if(empty($_POST['voorname'])|| empty($_POST['actername'])|| empty($_POST['email'])|| empty($_POST['email']) || empty($_POST['postcode']) || empty($_POST['adres']) ||empty($_POST['woonplaats']))
    {
      $melding = "AUB vull alle deze velden  ";


    }else{
      session_start();
      $voorname = $_POST['voorname'];
      $voorname = filter_input(INPUT_POST,'voorname',FILTER_SANITIZE_SPECIAL_CHARS);
      $_SESSION['voorname'] = $voorname;

      $actername = $_POST['actername'];
      $actername = filter_input(INPUT_POST,'actername',FILTER_SANITIZE_SPECIAL_CHARS);
      $_SESSION['actername'] = $actername;

      $adres = $_POST['adres'];
      $_SESSION['adres'] = $adres;

      $postcode = $_POST['postcode'];
      $_SESSION['postcode'] = $postcode;

      
      $woonplaats = $_POST['woonplaats'];
      $_SESSION['woonplaats'] = $woonplaats;

      $email = $_POST['email'];
      $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
      $_SESSION['email'] = $email;

      

      if(!$email){
        $melding = 'AUB email is niet goed';
      }else{
        $query = $db->prepare("INSERT INTO klantgegevens(name,last_name,email,adress,zip_code,plates) VALUES(:name, :last_name, :email, :adress, :zip_code, :plates)");
      $query->bindParam("name", $voorname);
      $query->bindParam("last_name", $actername);
      $query->bindParam("adress", $adres);
      $query->bindParam("email", $email);
      $query->bindParam("zip_code", $postcode);
      $query->bindParam("plates", $woonplaats);
      if($query->execute()){
        echo  "bravo";

      }else{
        echo "er is een fout opgetreden";
      }
      echo "<br>";
        header("Location: ordergegevens.php");

      }
    }
  }
}catch(PDOException $e){
  die("error " . $e->getMessage());
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


    
 
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand " href="#">ZUZU</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
         
          <li class="nav-item">
            <a class="nav-link" href="./home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./klantgegevens.php">Bestellen</a>
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>
<!---------------------------------------------------photo-->
<img class="mb-2" width="100%" src="./img/MicrosoftTeams-image (2).png ">
      
<!---------------------------------------------->

<div class="container ms-5 me-5 ps-5 pm-5 ">
  <div class="container ms-5 me-5 ps-5 pe-5">
    <h1 class="ms-5 me-5 ps-5 pe-5">Klantgegevens</h1>
    <form method="POST" action="">
      <div class="mb-3 ms-5 me-5 ps-5 pm-5">
        <label for="exampleInputEmail1" class="form-label">voornaam</label>
        <input type="text" name="voorname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3 ms-5 me-5 ps-5 pm-5">
        <label for="exampleInputPassword1" class="form-label">achternaam</label>
        <input type="text" name="actername" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 ms-5 me-5 ps-5 pm-5">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="text"  name="email" class="form-control" id="exampleInputPassword1">
      </div>
     <div class="mb-3 ms-5 me-5 ps-5 pm-5">
        <label for="exampleInputPassword1" class="form-label">Adres</label>
        <input type="text" name="adres" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 ms-5 me-5 ps-5 pm-5">
        <label for="exampleInputPassword1" class="form-label">Postcode</label>
        <input type="text" name="postcode" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 ms-5 me-5 ps-5 pm-5">
        <label for="exampleInputPassword1" class="form-label">Woonplaats</label>
        <input type="text" name="woonplaats" class="form-control" id="exampleInputPassword1">
        <button type="submit" name="submit" class="btn btn-dark mt-3 mb-3 ">Ga naar de Sushi</button>
      </div>

     
     
    </form>



  <?php  
 echo " <h3 > {$melding}</h3>";


 

  

?>

</div>
  








</div>
<!--------------------------------------footer-->
<div class="container-fluid bg-dark ">
  <div class="row">
    <div class="col-6 text-center m-0 p-0">
      <h5 class="text-white mt-1">Contactgegevens</h5>
      <p class="text-white m-0">Restaurant ZuZu</p>
      <p class="text-white m-0">1111AA Fruit</p>
      <p class="text-white m-0">zuzu@gmail.com</p>
      <p class="text-white m-0">06-12345678</p>


    </div>
    <div class="col-6 text-center m-0 p-0">
      <h5 class="text-white mt-1">Openingstijden</h5>
      <p class="text-white m-0">Maandag: Gesloten</p>
      <p class="text-white m-0">Dinsdag: 16:00-22.00</p>
      <p class="text-white m-0">Donderdag: 16:00-22:00</p>
      <p class="text-white m-0">Vrijdag: 16:00-22:00</p>
      <p class="text-white m-0">Zaterdag: 16:00-22:00</p>
      <p class="text-white m-0">Zaterdag: 16:00-22:00</p>
      <p class="text-white m-0">Zondag:Gesloten</p>


    </div>


</div>
  



</div>
  
</body>
</html>