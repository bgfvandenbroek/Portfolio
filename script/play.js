/*
Auteur:				Bram van den Broek
Startdatum:			23-1-2017 + 11:31
Bestandsnaam:		play.js
*/

//DECLAREREN EN INITIALISEREN VAN VARIABELN -----------------------------------------------------------------
var roundchoice = false; //Of er een aantal stappen is gekozen
var reken = [undefined, 0, 0, 0]; //Deze array is voor het bereken van wie vooruit mag
var muziek = new Audio('playContent/music.mp3'); //Achtergrond muziek
//Informatie over de speler en de 3 CPUs
//********************************
//USER[0] is de speler
//USER[1] is CPU1
//USER[2] is CPU2
//USER[3] is CPU3
//********************************
var user = [{
	distance: 0,
	choice: 0,
	animal: 0
}, {
	distance: 0,
	choice: 0,
	animal: 0
}, {
	distance: 0,
	choice: 0,
	animal: 0
},
{
	distance: 0,
	choice: 0,
	animal: 0
}];

//BIJ HET LADEN VAN DE PAGINA -------------------------------------------------------------------------
$(function ()
{
	//ON CLICKS ----------------------------------------------------------------------------------------
	//Regels open/dicht -maken
	$('#rule').click(function ()
	{
		$('#ruletext').stop().slideToggle(500);
		rule1st = true;
	});
	//Regels wegklikken
	$('#kruis').click(function ()
	{
		$('#ruletext').stop().slideToggle(500);
	});
	//Muis bewegen over playericons
	$('.playicon').mouseover(function ()
	{
		if (chosen)
		{
			$(this).css('cursor', 'default');
		}
		else
		{
			$(this).css('cursor', 'pointer');
		}
	});
	//Dier kiezen
	$('.playicon').click(function ()
	{
		if(chosen == false)
		{
			chosen = true;
			showDistance();
			$(this).css('cursor', 'default');
			//Welk dier is gekozen en bijbehorende hud daarvoor
			switch ($(this).attr('id'))
			{
				case 'bear':
					$('#p').prepend('<img src="playContent/p1.jpg" alt="hudp" width="40px" border="2px solid #ff9418">');
					$('#p1').prepend('<img src="playContent/p2.jpg" alt="hudp" width="40px">');
					$('#p2').prepend('<img src="playContent/p3.jpg" alt="hudp" width="40px">');
					$('#p3').prepend('<img src="playContent/p4.jpg" alt="hudp" width="40px">');
					user[0].animal = 'bear';
					user[1].animal = 'sloth';
					user[2].animal = 'fox';
					user[3].animal = 'eagle';
					$('#bear').css('border-color', '#ff9418');
					break;
				case 'sloth':
					$('#p').prepend('<img src="playContent/p2.jpg" alt="hudp" width="40px" border="2px solid #ff9418">');
					$('#p1').prepend('<img src="playContent/p1.jpg" alt="hudp" width="40px">');
					$('#p2').prepend('<img src="playContent/p3.jpg" alt="hudp" width="40px">');
					$('#p3').prepend('<img src="playContent/p4.jpg" alt="hudp" width="40px">');
					user[0].animal = 'sloth';
					user[1].animal = 'bear';
					user[2].animal = 'fox';
					user[3].animal = 'eagle';
					$('#sloth').css('border-color', '#ff9418');
					break;
				case 'fox':
					$('#p').prepend('<img src="playContent/p3.jpg" alt="hudp" width="40px" border="2px solid #ff9418">');
					$('#p1').prepend('<img src="playContent/p1.jpg" alt="hudp" width="40px">');
					$('#p2').prepend('<img src="playContent/p2.jpg" alt="hudp" width="40px">');
					$('#p3').prepend('<img src="playContent/p4.jpg" alt="hudp" width="40px">');
					user[0].animal = 'fox';
					user[1].animal = 'bear';
					user[2].animal = 'sloth';
					user[3].animal = 'eagle';
					$('#fox').css('border-color', '#ff9418');
					break;
				case 'eagle':
					$('#p').prepend('<img src="playContent/p4.jpg" alt="hudp" width="40px" border="2px solid #ff9418">');
					$('#p1').prepend('<img src="playContent/p1.jpg" alt="hudp" width="40px">');
					$('#p2').prepend('<img src="playContent/p2.jpg" alt="hudp" width="40px">');
					$('#p3').prepend('<img src="playContent/p3.jpg" alt="hudp" width="40px">');
					user[0].animal = 'eagle';
					user[1].animal = 'bear';
					user[2].animal = 'sloth';
					user[3].animal = 'fox';
					$('#eagle').css('border-color', '#ff9418');
					break;
			}
			//Elementen in de player zetten
			$('.playicon').css({ 'display': 'block', 'width': '50px', 'margin': '-50px 0 55px 0', 'left': '0' });
			$('#content').css('background-image', 'url(playContent/grid.jpg)');
			$('#hud').css('visibility', 'visible');
			$('#playtext').css('visibility', 'hidden');
			ps();
			//Achtergrond muziek
			muziek.play();
			restart();
		}
	});
	//Als er een aantal stappen wordt gekozen
	$('.dot').click(function ()
	{
		if (roundchoice == false)
		{
			roundchoice = true;
			user[0].choice = $(this).attr('alt');
			cpuChoice();
			$('.dot').fadeOut(500);
			setTimeout(function ()
			{
				showChoice();
				calculate();
			}, 500)
		}
	});
	//Tekstbox met regels standaard verbergen
	$('#ruletext').hide();
});