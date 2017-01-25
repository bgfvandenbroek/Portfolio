<?php
 //Het bericht dat je krijgt als het bericht is verstuurd.
  $message = 'Uw bericht is verzonden en u zult zo snel mogelijk antwoord krijgen.';
  //Ophalen van ingevulde naam
  $naam = $_POST["name"];
  //Ophalen van ingevulde email
  $from = $_POST["email"];
  $webadres = $_POST["url"];
  $geslacht = $_POST["gender"];
  //Ophalen van ingevulde onderwerp
  $onderwerp = $_POST["subject"];
  //Ophalen van ingevuld bericht
  $message = $_POST["message"];
  //Stuurt het bericht naar mijn eigen email
  $to = " bram.vandenbroek@edu-kw1c.nl ";
  //Onderwerp
  $headers = "From: ".$from." heeft een bericht gestuurd via de portfolio site.";

  //Het mailen
  mail ($to, $onderwerp, $message, $headers);
  //Alert geven als het bericht is gestuurd
  echo "<script type='text/javascript'>alert('$message');</script>";
?>

<!DOCTYPE html>

<html lang="en">
    <head>
		<link rel="shortcut icon" type="image/png" href="pic/bicon.png"/>
        <meta charset="utf-8" />
		<meta name="description" content="Bram van den Broek">
		<meta name="keywords" content="Bram van den Broek, ICT, applicatie, media, ontwikkeling">
        <title>Bram van den Broek</title>
		<link rel="stylesheet" type="text/css" href="css/StyleSheet.css">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<script src="script/jquery.js"></script>
		<script src="script/functies.js"></script>
		<script src="script/Script.js"></script>
    </head>
    <body>
		<header class="center">
			<h1>
				Bram van den Broek
			</h1>
			<figure id="play">
				<img src="pic/play.png" alt="play">
				<figcaption>SPELEN</figcaption>
			</figure>
			<figure id="login">
				<img src="pic/login.png" alt="login">
				<figcaption>CIJFERLIJST</figcaption>
			</figure>
			<div id="games">
				<a href="play.php">Stappen Spel</a>
				<br><br>
				<a href="quiz.php">Quiz</a>
			</div>
		</header>
		<table id="menu">
			<tr>
				<td>
					<a>HOME</a>
				</td>
				<td>
					<a href="over.php">OVER MIJ</a>
				</td>
				<td>
					<a href="opleid.php">OPLEIDINGEN</a>
				</td>
				<td>
					<a href="cont.php">CONTACT</a>
				</td>
			</tr>
		</table>
		<div id="content">
			<p>
				Welkom op de startpagina van de portfolio website van Bram van den Broek.
				<br>
				Op deze website kunt u informatie vinden over Bram van den Broek.
				<br>
				<br>
				Deze website heb ik gemaakt voor mijn portfolio opdracht voor HTML.
			</p>
		</div>
		<div id="cover"></div>
		<div id="left"></div>
    </body>
</html>