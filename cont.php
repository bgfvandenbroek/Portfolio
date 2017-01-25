<!--
Auteur:				Bram van den Broek
Startdatum:			16-1-2017 + 8:51
Bestandsnaam:		HTMLPage.html
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
			<h1>Contact</h1>
			<hr>
			<p class="center">
				<span id="mail">bram.vandenbroek@edu-kw1c.nl</span>
			</p>
			<form  action="send.php" method="POST" id="contactform">
				<input type="text" name="name" placeholder="Volledige naam" size="30" required><br><br>
				<input type="email" name="email" placeholder="Email" size="30" required><br><br>
				<input type="url" name="url" placeholder="Bedrijf website" size="30"><br>(niet verplicht)<br><br>

				<label>Geslacht: </label>
				<select name="gender">
				  <option value="m">Man</option>
				  <option value="v">Vrouw</option>
				</select>
				<br>
				<br>

				<input type="radio" name="vraag" checked>
				<label>Vraag</label>
				<input type="radio" name="vraag">
				<label>Bericht</label><br><br>

				<input type="text" name="subject" size="30" placeholder="Onderwerp" required><br>
				<br>
				<textarea name="message" rows="7" placeholder="Typ hier uw vraag of bericht" cols="46" required></textarea><br> <br>

				<input class="knop" id="verzendknop" type="submit" name="button" value="Verzenden">
          </form>
		</div>
		<div id="cover"></div>
		<div id="left"></div>
    </body>
</html>
