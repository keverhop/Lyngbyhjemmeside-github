<?php
require_once("dbcon.php");
if(isset($_GET["opret"])){
    $overskrift = $_POST["overskrift"];
    $tekst = $_POST["tekst"];
    $tekst = $_POST["tekst"];
    $mappenavn = "uploads/";
    $tidspunkt = round(microtime(true) * 1000);
    $billede = $mappenavn . $tidspunkt . "-" . basename($_FILES["link"]["name"]);
    $billedetype = strtolower(pathinfo($billede, PATHINFO_EXTENSION));
    $billedefil = $_FILES["link"];
    
    if($billedetype != "jpg" && $billedetype != "png"){
        echo '<script>javascript:alert("Filtypen er ikke understøttet");</script>';
    } else {
        if(move_uploaded_file($billedefil["tmp_name"], $billede)){
            mysqli_query($link, "INSERT INTO opslag (overskrift, tekst, link) VALUES ('{$overskrift}', '{$tekst}', '{$billede}')");
            echo '<script>javascript:alert("Filen blev uploadet");</script>';
        } else {
            echo '<script>javascript:alert("Filen kunne ikke uploades");</script>';
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lyngby Boldklub</title>
    <link rel="stylesheet" href="css.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="icon" href="/ikoner/favicon-16x16.png" type="image/png">

</head>
<body> 
<div class="sidenav">
    <a href="index.php"><img class="logo" src="ikoner/logo.png" alt="logo" height="170" width="180"/></a> 
   
   <div class="sidenavsome">
        <a href="#"><img class="some" src="ikoner/facebook.png" width="35"></a>
        <a href="#"><img class="some" src="ikoner/instagram.png"  width="35"></a>
        <a href="#"><img class="some" src="ikoner/mail.png"  width="35"></a>
        <a href="#"><img class="some" src="ikoner/youtube.png" width="35"></a><br><br><br>
 </div>
    
  <ul class="accordion-menu">
  <li>
    <div class="dropdownlink"><i class="fa fa-road" aria-hidden="true"></i> Holdet
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
    <ul class="submenuItems">
      <li><a href="#">Superligaholdet</a></li>
      <li><a href="#">Kampe</a></li>
    </ul>
  </li>
  <li>
    <div class="dropdownlink"><i class="fa fa-paper-plane" aria-hidden="true"></i> Historie
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
    <ul class="submenuItems">
      <li><a href="#">Klub 100</a></li>
      <li><a href="#">Landsholdspillere</a></li>
      <li><a href="#">Æresmedlemmer</a></li>
        <li><a href="#">Lyngby Stadion</a></li>
    </ul>
  </li>
  <li>
    <div class="dropdownlink"><i class="fa fa-quote-left" aria-hidden="true"></i> Fanshop
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
    <ul class="submenuItems">
      <li><a href="#">Billetter</a></li>
      <li><a href="fanshoptroeje.php">Spillertrøjer</a></li>
    </ul>
  </li>
  <li>
    <div class="dropdownlink"><i class="fa fa-motorcycle" aria-hidden="true"></i> #delditlbk
      <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </div>
    <ul class="submenuItems">
      <li><a href="se.php">Se</a></li>
      <li><a href="opret.php">Opret</a></li>
    </ul>
  </li>
</ul> 
</div>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <script src="js/index.js"></script>
    <div class="main">
        <img src=billeder/header2.png width="100%" height="100%">

    <div class="article">
        <br><h1>OPRET</h1><br>

<form id="contact" action="?opret" method="post" enctype="multipart/form-data">
  <div class="container">

    <input type="text" name="overskrift" placeholder="Name" /><br/>
    <textarea type="text" name="message" placeholder="Beskrivelse"></textarea><br />
  <input type="file" name="link" accept="image/*">
  <br><br><br><br>
    <button id="submit" name="opret" type="submit" value="opret">
      Send
    </button>
      <br><br><br>
  </div>
</form>

                     
</div>  
</div>
     <footer class="footer-distributed">

			<div class="footer-right">

				<a href="#"><img src="ikoner/facebook.png" width="45"></a>
				<a href="#"><img src="ikoner/instagram.png"  width="45"></a>
				<a href="#"><img src="ikoner/mail.png"  width="45"></a>
                <a href="https://www.youtube.com/watch?v=S4vLBwDL0TU&t=1s"><img src="ikoner/youtube.png" width="45" ></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a href="#">Holdet</a>
					·
					<a href="#">Histore</a>
					·
					<a href="#">Lyngby Stadion</a>
					·
					<a href="#">#delditlbk</a>
				</p>

				<p>Kevin William Bast &copy; 2017</p>
                <h2>Hovedsponsore</h2>
                
                <div class="footerimg">
                <img src="ikoner/justsold.png" width="220" height="50">
                <img src="ikoner/adidaslogo.png" width="135">
                <img src="ikoner/unisport.png" width="145" height="70">
                <img src="ikoner/fog-170x170.png" width="75">
                </div>
                
			</div>

		</footer>  
    
</body>
</html> 
