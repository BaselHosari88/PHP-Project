<?php

date_default_timezone_set("Europe/Amsterdam");
$todaywith = date("H;i");
$today = date("H");
$time = date("j F Y");
$day = date("l");



$extra = date("w");
$dagen = array("Zondag", "Maandag", "Diensdag","Woensdag","Donderdag","Frijdag","Zaterdag");



$extra2 = date("n");
$maanden = array("Januari", "Februari", "Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December");

$ordertime = $time = date('H:i',strtotime('+1hour'));


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
            <a class="nav-link" href="./home.php"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./klantgegevens.php">Bestellen</a>
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>

  <!---------------------------------------------------photo-->
 

  <img class="mb-2" width="100%" src="./img/MicrosoftTeams-image (2).png " >
   <div class="container-fluid ">
    <h1 class="text-center mt-1 mb-1"><?php
      
      if($today >=01 && $today<=12){
        echo "Goodmorgen ,";
      }elseif($today >=12 && $today<=6){
        echo "Goedemiddag , ";
      }else{
        "GoedeAvound ,";
      }

      echo " Welkom bij ZuZu" ;
      echo"<br>";
      
    ?></h1>
    <br>

    <p class="text-center m-0">wij zijn gespecialiseerd in de Japanes keuken,</p>
    <p class="text-center">het woord 'Sushi' afkomsting van 'SU' , wat azijn betekent en ''shi-rijst.</p>
    <br>
    <h4 class="text-center m-1 "><?php echo  "Vaandaag is " . $dagen[$extra] . ", " ."en de maand is " . $maanden[$extra2] ?></h4>
    <h4 class="text-center m-1"><?php 
    if($day === "Sunday"){
      echo "vandaag is gesloten";
    }elseif($day === "Monday"){
      echo "vandaag is gesloten ";
    }elseif($day === "Tuesday"){
      echo"openingstijden van vaandaag tussen 16.00 tot 22.00";
    }elseif($day ==="Wednesday"){
      echo"openingstijden van vaandaag tussen 16.00 tot 22.00";
    }elseif($day ==="Friday" ){
      echo"openingstijden van vaandaag tussen 15.00 tot 22.00";
    }elseif($day ==="Saterday"){
      echo"openingstijden van vaandaag tussen 15.00 tot 22.00";
    }
    echo"<br>";
    echo"<br>";
    echo "  Je bestellen komt om " .  $ordertime;
    /*ik probeer met tijd 1 uur extra optellen maar het lukt niet daarom gebruik ik dit trijkje*/
   
    
    
    ?></h4>
    <!---------------------------------------end text center-->
    <div class="container mt-2">
      <div class="row">
        <div class="col-6 text-center"><img src="./img/MicrosoftTeams-image (1).png" alt="" width="100%"></div>
        <div class="col-6 text-center"><img src="./img/MicrosoftTeams-image.png" width="100%" height="100%"></div>
      </div>
      <!--------------------------end of the photos-->
      <div class="row">
        <div class="col-6 text-center">
          <p>Bestel bij ons je susho's</p>
        </div>
        <div class="col-6 text-center">
          <p>keuze uit verschillende soorten sushi's</p>
        </div>

      </div>


    </div>

  </div>

  <!--------------------------------------footer-->


  </div>

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
        <p class="text-white m-0">Woensdag: 16:00-22:00</p>
        <p class="text-white m-0">Donderdag: 16:00-22:00</p>
        <p class="text-white m-0">Vrijdag: 15:00-22:00</p>
        <p class="text-white m-0">Zaterdag: 15:00-22:00</p>
        <p class="text-white m-0">Zondag:Gesloten</p>


      </div>

</body>

</html>