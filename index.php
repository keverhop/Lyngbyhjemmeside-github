<?php
require_once("dbcon.php");
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
        <a href="https://www.youtube.com/watch?v=S4vLBwDL0TU&t=1s" target="_blank"><img class="some" src="ikoner/youtube.png" width="35"></a><br><br><br>
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
        <img src=billeder/header.png width="100%" height="100%">

    <div class="article">
        <br><h1>SENESTE NYHEDER</h1><br>

                        <p>Velkommen til vores splinternye hjemmeside.</p>
                        <p>Her vil vi løbende opdatere vores fans, med de seneste nyheder om spiller truppen, kommende kampe, events mm.</p>
                        <p>Allerede nu kan du uploade dit favorit Lyngby Boldklub øjeblik fra forårs sæsonen på vores #delditlbk side, med chance for at vinde et halvårs sæson kort, spiller trøjer og andre fede præmier.</p>
                        <p>Under vores hjemmekampe, vil i også have mulighed for at bruge hashtagget #delditlbk med en chance for at få vist jeres billeder på storskærmen, i pausen.</p>
                        <p>Vi håber i alle vil tage godt imod vores nye hjemmeside og vi håber i alle vil få et bedre indblik ind i vores alles klub.</p>
                        <p>Bedste hilsner fra os fra Lyngby Boldklub.</p>



                     
</div>  
        
        <div class="projects">
                    <div class="text-box">
                        <div class="text-box-content">
                            <img src="billeder/fcnlbk.jpg" width="325" height="200"> 
                                <p>Billetinfo: Lyngby Boldklub - FC Nordsjælland</p>
                                <a href="#" class="button">Læs Mere</a>
                        </div>
                    </div>
                    
                    <div class="text-box">
                        <div class="text-box-content">
                            <img src="billeder/lbkfkkrasnodar.png" width="325" height="200">    
                            <p>Kampene mod FK Krasnodar er blevet fastlagt </p>
                                <a href="#" class="button">læs mere</a>
                        </div>
                    </div>
                      <div class="text-box">
                        <div class="text-box-content">
                            <img src="billeder/fchlbk.jpg" width="325" height="200"> 
                                <p>Highlights: Se alle mål fra vores stor sejr, ude mod Helsingør</p>
                                <a href="#" class="button">læs mere</a>
                        </div>
                    </div>
            
                    <div class="text-box">
                        <div class="text-box-content">
                            <img src="billeder/snapchat.jpg" width="325" height="200"> 
                                <p>Snapchat: David Boysen overtager i dag vores snapchat. Kom og følg med!</p>
                                <a href="#" class="button">Læs Mere</a>
                        </div>
                    </div>
                    
                    <div class="text-box">
                        <div class="text-box-content">
                            <img src="billeder/michaellumb.png" width="325" height="200">    
                            <p>Michael Lumb: Vi har før slået store hold. Krasnodar bliver undtagelse </p>
                                <a href="#" class="button">læs mere</a>
                        </div>
                    </div>
                      <div class="text-box">
                        <div class="text-box-content">
                            <img src="billeder/jeppekj%C3%A6r.jpg" width="325" height="200"> 
                                <p>Følg Jeppe Kjærs vej tilbage til grønsværen</p>
                                <a href="#" class="button">læs mere</a>
                        </div>
                    </div>
            </div>
        <div class="videoarticle">
            <a href="#">
                <img src="billeder/boysen-solo-tur.png" width="100%" alt="david-boysen-solotur" class="image" onmouseover="this.src='billeder/boysen-solo-turhover.png' " onmouseout="this.src='billeder/boysen-solo-tur.png'">
            </a>
            </div>
        <div class="videoarticle">
            <a href="https://www.youtube.com/watch?v=S4vLBwDL0TU&t=1s" target="_blank">
                <img src="billeder/kampenomnordsj%C3%A6lland.png" width="100%" alt="kampen om nordsjælland" class="image" onmouseover="this.src='billeder/kampenomnordsjællandhover.png' " onmouseout="this.src='billeder/kampenomnordsj%C3%A6lland.png'">
            </a>
        </div>
        
        <div class="buyarticle">
            <h1> LYNGBY BOLDKLUB FANSHOP</h1>
            <div class="buy-box">
                        <div class="buy-box-content">
                            <img src="billeder/hjemmetr%C3%B8je.png" width="325" height="380"> 
                                <p>2017-18 Hjemmebane trøje </p>
                                <a href="#" class="button">Køb Trøje</a>
                        </div>
            </div>
            <div class="buy-box">
                        <div class="buy-box-content">
                            <img src="billeder//udetr%C3%B8je.png" width="325" height="380"> 
                                <p>2017-18 Udebane trøje</p>
                                <a href="#" class="button">Køb Trøje</a>
                        </div>
            </div>
            <div class="buy-box">
                        <div class="buy-box-content">
                            <img src="billeder/tredjetr%C3%B8je.png" width="325" height="380">  
                                <p>2017-18 Tredje trøje</p>
                                <a href="#" class="button">Køb Trøje</a>
                        </div>
            </div>
            <div class="buy-box">
                        <div class="buy-box-content">
                            <img src="billeder/201617tr%C3%B8je.png" width="325" height="380"> 
                                <p>2016-17 Hjemmebane trøje </p>
                                <a href="#" class="button">Køb Trøje</a>
                        </div>
            </div>
        
                
        
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