<?php
	session_start();
	if(isset($_SESSION['loggedin'])){
		if($_SESSION['loggedin'] == FALSE){
			header('Location: login.php');
			die();
		}
	}
	else{
		header('Location: login.php');
		die();
	}
?>
<!--
Auteur:				Bram van den Broek
Startdatum:			23-1-2017 + 11:51
Bestandsnaam:		cijfer.php
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
		<link rel="stylesheet" type="text/css" href="css/cijfer.css">
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
					<a>OVER MIJ</a>
				</td>
				<td>
					<a href="opleid.php">OPLEIDINGEN</a>
				</td>
				<td>
					<a href="cont.php">CONTACT</a>
				</td>
			</tr>
		</table>
			<table id="cijfer">
				<thead>
					<tr>
						<th></th>
						<th>Periode 1</th>
						<th>Periode 2</th>
						<th>Periode 3</th>
						<th>Periode 4</th>
				</thead>
				<tbody>
					<tr>
						<th>Analyseren</th>
						<td>-</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th>Digitale vaardigeheden</th>
						<td>8,7 8,7</td>
						<td>7,7 7,7</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th>Computertekenen</th>
						<td>7,0 7,0</td>
						<td>7,0</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th>Database / SQL</th>
						<td>-</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th>Hardware AO</th>
						<td>7,0 7,0</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th>HTML CSS</th>
						<td>9,7 9,0</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th>Javascript</th>
						<td>10 9,3</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th>ASP</th>
						<td>-</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th>PHP</th>
						<td>10 8,2</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th>Nederlands</th>
						<td>9 9,5</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th>Engels</th>
						<td>8 8,8</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th>Rekenen</th>
						<td>7 8,7 8</td>
						<td>6 8</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th>Loopbaan en Burgerschap</th>
						<td>7</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		<div id="cover"></div>
		<div id="left"></div>
    </body>
</html>