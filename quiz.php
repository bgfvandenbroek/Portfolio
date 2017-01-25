<?php

?>
<!--
Auteur:				Bram van den Broek
Startdatum:			24-1-2017 + 8:39
Bestandsnaam:		quiz.php
-->
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
		<script src="script/quiz.js"></script>
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
					<a href="home.php">HOME</a>
				</td>
				<td>
					<a href="over.php">OVER MIJ</a>
				</td>
				<td>
					<a href="opleid.php">OPLEIDINGEN</a>
				</td>
				<td>
					<a>CONTACT</a>
				</td>
			</tr>
		</table>
		<div id="content">
		</div>
		<div id="cover"></div>
		<div id="left"></div>
    </body>
</html>
