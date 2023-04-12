
<?php
session_start();



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
      
<!-------------------------------------------------->
<div class="container-fluid ms-5 me-5 ps-5 pe-5 ">
  <div class="container ms-5 me- ps-5 pe-5">
    <div class="row">
     
      <div class="card">
        <div class="card-body">
          <h3>Bestelling</h3>
          <p><?php
          echo "het aantal van de eerste Maki is " . $_SESSION['Maki1'];
          echo"<BR>";
          
          echo "het aantal van de tweede Maki is" . $_SESSION['Maki2'];
          echo"<BR>";
          
          
          echo "het aantal nigiri is " . $_SESSION['Nigiri'];
          echo"<BR>";
          
          
          echo "het aantal  Philadephia is " . $_SESSION['Philadephia'];
          echo"<BR>";
          
          
          echo "het aantal  Spicy is" . $_SESSION['Spicy'];
          echo"<BR>";
          
          echo "het aantal  California is " . $_SESSION['California'];
          echo"<BR>";
          
          
          ?></p>
          <h5>Tataal 5 euro</h5>
          <h5></h5>

        </div>
      </div>

      </div>
      <div class="row">
        <div class="card">
          <div class="card-body">
            <h3>Klantgegevens</h3>
            <p class="m-0 p-0"><?php 
  echo "de naam van de klant is  : " . $_SESSION['voorname'];
  echo "<br>";
  echo "de achternaam van de klant is  : " . $_SESSION['actername'];
  echo "<br>";
  echo "de adres van de klant is   :" . $_SESSION['adres'];
  echo "<br>";
  echo "the postcode van the klant is  :" . $_SESSION['postcode'];
  echo "<br>";
  echo "woon plaats van de klant is : " . $_SESSION['woonplaats'];
  echo "<br>";
  echo "de email van de klant  " . $_SESSION['email'];
  echo "<br>";

  ?> </p>
            
   </div>
   </div>
   
    </div>
  </div>
  </div>

<!----------------end van the big container-->
</div>
  
<!--------------------------------------footer-->


</div>

</div>
 
  
</div>

<!----------------end van the big container-->
</div>
  
<!--------------------------------------footer-->


</div>

<div class="container-fluid bg-dark mt-3 ">
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
  
</body>
</html>