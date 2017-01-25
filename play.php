<!--
Auteur:				Bram van den Broek
Startdatum:			21-1-2017 + 10:58
Bestandsnaam:		play.php
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
		<link rel="stylesheet" type="text/css" href="css/play.css">
		<script src="script/jquery.js"></script>
		<script src="script/functies.js"></script>
		<script src="script/Script.js"></script>
		<script src="script/play.js"></script>

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
		<div id="content">
			<div id="box">
				<img src="playContent/rule.png" alt="rules" width="75px" id="rule">
				<div id="playtext">Kies een dier</div>
				<img src="playContent/p1.jpg" alt="beer" id="bear" class="playicon">
				<img src="playContent/p2.jpg" alt="luiaard" id="sloth" class="playicon">
				<img src="playContent/p3.jpg" alt="vos" id="fox" class="playicon">
				<img src="playContent/p4.jpg" alt="adelaar" id="eagle" class="playicon">
				
				
			</div>
			<div id="hud">
				<figure id="p1">
					<figcaption><span id="a1">Afstand</span></figcaption>
				</figure>
				<figure id="p2">
					<figcaption><span id="a2">Afstand</span></figcaption>
				</figure>
				<figure id="p3">
					<figcaption><span id="a3">Afstand</span></figcaption>
				</figure>
				<figure id="p">
					<figcaption><span id="a">Afstand</span></figcaption>
				</figure>
				<div id="choose">
					<img src="playContent/1.png" alt="1" id="een" class="dot">
					<img src="playContent/2.png" alt="2" id="twee" class="dot">
					<img src="playContent/3.png" alt="3" id="drie" class="dot">
				</div>
			</div>
			<div id="ruletext">
				<br>Je kiest een dier.
				<br>Dat dier moet je naar de overkant brengen.
				<br><br>Elke ronde kun je kiezen of je 1, 2 of 3 stappen doet.
				<br>Als een tegenstander hetzelfde aantal stappen wilt doen als jij dan mogen jullie beide niet vooruit.
				<br>Je kunt dus alleen vooruit gaan als je een uniek getal pakt.<br><br> De tegenstanders zullen vaker een 3 kiezen dan een 1.
				<br><br>De eerste(n) die een afstand van 20 stappen afleggen hebben gewonnen.
				<img id="kruis" src="playContent/kruis.png" alt="X"></div>
			</div>
		</div>
		<div id="cover"></div>
		<div id="left"></div>
    </body>
</html>
