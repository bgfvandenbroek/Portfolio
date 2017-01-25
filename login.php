<!--
Auteur:				Bram van den Broek
Startdatum:			23-1-2017 + 9:48
Bestandsnaam:		login.php
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
			<div id="formwrapper">
				<form method="post" action="check.php">
					<h2>Inloggen</h2>
					<table>
						<tr>
							<td>
								<label>E-mail: </label>
							</td>
							<td>
								<input type="email" name="mail" id="mail" required>
							</td>
						</tr>
						<tr>
							<td>
								<label>Wachtwoord: </label>
							</td>
							<td>
								<input type="password" name="ww" id="ww" required>
							</td>
						</tr>
					</table>
					<input type="submit" value="Log in">
				</form>
			</div>
		</div>
		<div id="cover"></div>
		<div id="left"></div>
    </body>
</html>