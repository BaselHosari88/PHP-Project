<?php
session_start();
try{
  $db2 = new PDO ("mysql:host=localhost;dbname=zuzu","root","");


$warning = '';
if(isset($_GET['submit2'])){
  if(empty($_GET['Maki1']) || empty($_GET['Maki2']) || empty($_GET['Nigiri']) || empty($_GET['Philadephia'])||empty($_GET['Spicy'])|| empty($_GET['California'])){
    $warning = 'please full all of these items';
  }else{
    $Maki1 = $_GET['Maki1'];
    $Maki1 = filter_input(INPUT_GET,'Maki1',FILTER_VALIDATE_INT);
    $_SESSION['Maki1'] = $Maki1;

    $Maki2 = $_GET['Maki2'];
    $Maki2 = filter_input(INPUT_GET,'Maki2',FILTER_VALIDATE_INT);
    $_SESSION['Maki2'] = $Maki2;

    $Nigiri = $_GET['Nigiri'];
    $Nigiri = filter_input(INPUT_GET,'Nigiri',FILTER_VALIDATE_INT);
    $_SESSION['Nigiri'] = $Nigiri;

    $Philadephia = $_GET['Philadephia'];
    $Philadephia = filter_input(INPUT_GET,'Philadephia',FILTER_VALIDATE_INT);
    $_SESSION['Philadephia'] = $Philadephia;

    $Spicy = $_GET['Spicy'];
    $Spicy = filter_input(INPUT_GET,'Spicy',FILTER_VALIDATE_INT);
    $_SESSION['Spicy'] = $Spicy;

    $California = $_GET['California'];
    $California = filter_input(INPUT_GET,'California',FILTER_VALIDATE_INT);
    $_SESSION['California'] = $California;



    if(!$Maki1 || !$Maki2 || !$Nigiri || !$Philadephia || !$Spicy || !$California){
      $warning = "please full number just ";
      }
    
     else{
      $query3 = $db2->prepare("INSERT INTO ordergegevens(maki_1,maki_2,nigiri,philadephia,spicy,california) VALUES (:maki_1, :maki_2, :nigiri, :philadephia, :spicy, :california)");
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
      
        header("location: more.php");
  
      }
    
    }
   
  }
}catch(PDOException $ee){
    die("stop error" . $ee->getMessage());
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
<img class="mb-2" width="100%" src="./img/MicrosoftTeams-image (2).png "
      
<!---------------------------------------------->

<div class="container ms-5 me-5 ps-5 pm-5 ">
  <div class="container ms-5 me-5 ps-5 pe-5">
    <h1 class="ms-5 me-5 ps-5 pe-5">ordergegevens</h1>
    <form method="GET" action="">
      <div class="mb-3 ms-5 me-5 ps-5 pm-5">
        <label for="exampleInputEmail1" class="form-label">Maki Komkommer</label>
        <input type="text" name="Maki1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3 ms-5 me-5 ps-5 pm-5">
        <label for="exampleInputPassword1" class="form-label">Maki acovado</label>
        <input type="text" name="Maki2" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 ms-5 me-5 ps-5 pm-5">
        <label for="exampleInputPassword1" class="form-label">Nigiri Zaml</label>
        <input type="text"  name="Nigiri"class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 ms-5 me-5 ps-5 pm-5">
        <label for="exampleInputPassword1" class="form-label">Philadephia Roll</label>
        <input type="text" name="Philadephia" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 ms-5 me-5 ps-5 pm-5">
        <label for="exampleInputPassword1" class="form-label">Spicy Tuna Roll</label>
        <input type="text" name="Spicy" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 ms-5 me-5 ps-5 pm-5">
        <label for="exampleInputPassword1" class="form-label">California Roll</label>
        <input type="text" name="California" class="form-control" id="exampleInputPassword1">
        <button type="submit" name="submit2" value="submit2" class="btn btn-dark mt-3 mb-3 ">Verzenden</button>
      </div>

     
     
    </form>


  </div>

<?php
  echo " <h3 > {$warning}</h3>";
?>




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