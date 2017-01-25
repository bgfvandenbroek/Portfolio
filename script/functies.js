//ALGEMENE FUNCTIES------------------------------------------------------------------------------------------------------
//SMALLER SCHERM--------------------------------------------------------------------------------
function ss()
{
	if ($(window).width() <= 613)
	{
		$('#menu').html('<tr><td><a href="home.php">HOME</a></td></tr><tr><td><a href="over.php">OVER MIJ</a></td></tr><tr><td><a href="opleid.php">OPLEIDINGEN</a></td></tr><tr><td><a href="cont.php">CONTACT</a></td></tr>')
	}
	else
	{
		$('#menu').html('<tr><td><a href="home.php">HOME</a></td><td><a href="over.php">OVER MIJ</a></td><td><a href="opleid.php">OPLEIDINGEN</a></td><td><a href="cont.php">CONTACT</a></td></tr>');
	}
}

//QUIZ FUNCTIES----------------------------------------------------------------------------------------------------------
function printAnswers() //Buttons
{
	var terug = '';
	for (i = 0; i < vragen[vraagnum].antwoorden.length; i++)
	{
		terug += '<button value="' + i + '" class="b">' + vragen[vraagnum].antwoorden[i] + '</button>';
	}
	return terug;
}
function newQuestion() //Nieuwe vraag laten zien
{
	//Als het niet de laatste vraag is
	if (vraagnum != vragen.length)
	{
		$('#content').html('<h1 class="center">Vraag ' + (parseInt(vraagnum) + 1) + '</h1><br><h2>' + vragen[vraagnum].vraag + '</h2><br>'
		+ printAnswers() + '<br><div id="punten"></div>');
		$('#punten').html('<br>Punten: ' + punten + '<br>Progressie: ' + parseInt(vraagnum / vragen.length * 100) + '%');
	}
	else //Als het wel de laatste vraag is
	{
		$('#content').html('<h1>Einde van de quiz</h1><br><br>Je hebt ' + punten + ' van de ' + vragen.length + ' vragen goed beantwoord<br>'+parseInt(punten / vragen.length * 100) + '%<br><br><div id="restart">Speel opnieuw</div>');
		$('#restart').click(function ()
		{
			location.reload();
		});
	}
	$('.b').click(function () //Als er een antwoord is aangeklikt
	{
		if ($('#content h1').text() != 'GOED' && $('#content h1').text() != 'FOUT') //Als er nog geen ander antwoord is aangeklikt
		{
			if ($(this).attr('value') == vragen[vraagnum].antwoord) //Als het antwoord goed is
			{
				$('#content h1').html('<span id="goed">GOED</span><br><div id="punten"></div>');
				$('#punten').html('<br>Punten: ' + punten + '<br>Progressie: ' + parseInt(vraagnum / vragen.length * 100) + '%');
				$('#punten').text('');punten++;
			}
			else //Als het antwoord fout is
			{
				$('#content h1').html('<span id="fout">FOUT</span><br><div id="punten"></div>');
				$('#punten').html('<br>Punten: ' + punten + '<br>Progressie: ' + parseInt(vraagnum / vragen.length * 100) + '%');
				$('#punten').text('');
			}
			setTimeout(function ()
			{
				vraagnum++; //Var die de vraag houdt
				newQuestion();
			}, 1000)
		}
	});
}
//STAPPEN SPEL FUNCTIES-----------------------------------------------------------------------------------------------------
//FUNCTIES --------------------------------------------------------------------------------------------
//Functie om de regels te laten knipperen
var chosen = false;var rule1st = false;
function knipper()
{
	if (chosen == false && rule1st == false)
	{
		setTimeout(function ()
		{
			$('#rule').css('border', '3px solid #bbbbbb');
			setTimeout(function ()
			{
				$('#rule').css('border', '3px solid transparent');
				knipper();
			}, 500);
		}, 500);
	}
}
knipper();
//Functie bij het aanpassen van de pagina
function ps()
{
	var height = parseInt(($('#content').height())) - 80; //Hoogte van de playbox ophalen
	height *= 0.22; //De formule om de playericons te berekenen
	height = height + 'px'; //Het woord px toevoegen
	$('.playicon').css('width', height); //Playericons de juiste grootte geven
}
//Als de pagina wordt aangepast
$(window).resize(function ()
{
	if (chosen)
	{
		ps();
	}
});
//Functie om afstanden te printen in de status
function showDistance()
{
	$('#a').text('Afstand ' + user[0].distance);
	$('#a1').text('Afstand ' + user[1].distance);
	$('#a2').text('Afstand ' + user[2].distance);
	$('#a3').text('Afstand ' + user[3].distance);
}
//Functie om keuzes te printen in de status
function showChoice()
{
	$('#a').text('Keuze ' + user[0].choice);
	$('#a1').text('Keuze ' + user[1].choice);
	$('#a2').text('Keuze ' + user[2].choice);
	$('#a3').text('Keuze ' + user[3].choice);
}
//Functie om CPU keuzes te maken
function cpuChoice()
{
	for (i = 1; i <= 3; i++)
	{
		var keus = Math.floor(Math.random() * 14 + 1);
		if (keus <= 3)
		{ keus = 1; } //1 stap kans van 3 op 14   (21%)
		else if (keus <= 8)
		{ keus = 2; } //2 stap kans van 5 op 14   (36%)
		else
		{ keus = 3; } //3 stap kans van 6 op 14   (43%)
		user[i].choice = keus;
	}
}
//Functie om de achtergrond muziek opnieuw af te spelen 
function restart()
{
	setTimeout(function ()
	{
		muziek.currentTime = 1; muziek.play(); restart();
	}, (muziek.duration - 1) * 1000);
}
//Functie om te berekenen wie er naar voren mag
function calculate()
{
	reken = [undefined, 0, 0, 0]; //array opnieuw zetten
	//For loop die kijkt hoeveel er van elke keuze is gemaakt
	for (i = 0; i <= 3; i++)
	{
		reken[user[i].choice]++;
	}
	//For loop om te kijken of de speler of CPU een unieke keuze heeft gemaakt
	for (i = 0; i <= 3; i++)
	{
		if (reken[user[i].choice] <= 1)
		{
			move(i); //Speler of CPU naar voren roepen
		}
	}
	//Als de ronde afgelopen is alles weer terug zetten
	setTimeout(function ()
	{
		$('.playicon').css('border-color', 'transparent');
		$('#' + user[0].animal).css('border-color', '#ff9418');
		$('#a').css('color', '#ff9418');
		for (i = 1; i <= 3; i++)
		{
			$('#a' + i).css('color', '#ff9418');
		}
		showDistance();
		$('.dot').fadeIn(500);
		roundchoice = false;
	}, 2000);
}
//Functie voor het vooruit roepen van de speler en of CPUs
function move(playernum)
{
	//Groene kleuren geven bij unieke keuze
	$('#' + user[playernum].animal).css('border-color', '#00ff21');
	if (playernum == 0)
	{
		$('#a').css('color', '#00ff21');
	}
	else
	{
		$('#a' + playernum).css('color', '#00ff21');
	}
	//Afstand in informatie bijwerken
	user[playernum].distance += (1 * user[playernum].choice);
	setTimeout(function ()
	{
		//Als er iemand gewonnen heeft
		if (user[playernum].distance >= 20)
		{
			$('.dot').remove();
			setTimeout(function ()
			{
				$('#playtext').css({ 'visibility': 'visible', 'position': 'absolute', 'top': '40%', 'width': '100%' });
				$('#playtext').text('De ' + user[playernum].animal + ' heeft gewonnen!');
				$('.playicon').remove();
				setTimeout(function ()
				{
					location.reload();
				}, 3000);
			}, 1500);
		}
		//Speler of CPU met de juiste formule naar voren roepen
		$('#' + user[playernum].animal).animate({ 'left': '+=' + (4.4 * user[playernum].choice) + '%' }, 1000);
	}, 1000)
}