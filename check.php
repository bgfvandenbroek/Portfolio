<?php
	$error = 'Er is geen error';
	session_start();
	$_SESSION['loggedin'] = FALSE;
	function mailCheck(){
		if(isset($_POST['mail'])){
 			if($_POST['mail'] == 'bram.vandenbroek@edu-kw1c.nl'){
				return TRUE;
 			}
		}
	}

	function wwCheck(){
		if(isset($_POST['ww'])){
			if($_POST['ww'] == 'admin'){
				return TRUE;
			}
		}
	}
	
	if(mailCheck() == TRUE && wwCheck() == TRUE){
		$_SESSION['loggedin'] = TRUE;
		header('Location: cijfer.php');
	}
	elseif(mailCheck() == TRUE){
		$error = 'Het wachtwoord is onjuist';
	}
	else{
		$error = 'De mail in onjuist';
	}
?>
<!--
Auteur:				Bram van den Broek
Startdatum:			22-1-2017 + 14:22
Bestandsnaam:		check.php
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
					<p>
						<?php echo $error;?>
					</p>
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