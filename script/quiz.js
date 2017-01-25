/*
Auteur:				Bram van den Broek
Startdatum:			24-1-2017 + 8:43
Bestandsnaam:		quiz.js
*/

//De vragen
var vragen = [
{
	vraag: 'Waar woon ik?',
	antwoorden: ['Den Bosch','Tilburg', 'Oss', 'Waalwijk'],
	antwoord: 3
},

{
	vraag: 'Hoe oud ben ik?',
	antwoorden: ['17','18','19','20'],
	antwoord: 2
},

{
	vraag: 'Op welke school zit ik?',
	antwoorden: ['Koning Willem 1 College','ROC Tilburg','Avans','derooipannen'],
	antwoord: 0
},

{
	vraag: 'Welke middelbare opleiding heb ik afgerond?',
	antwoorden: ['Kader','vmbo-t','HAVO','VWO'],
	antwoord: 1
},

{
	vraag: 'Wat is een vak dat ik heb?',
	antwoorden: ['Analyseren','Service Desk','Operating systems','Spaans'],
	antwoord: 0
},

{
	vraag: 'Op welke opleiding zit ik?',
	antwoorden: ['ICT-beheerder','Netwerk-Beheerder','Applicatieonwikkelaar'],
	antwoord: 2
},

{
	vraag: 'In welke taal is deze quiz geschreven?',
	antwoorden: ['CSS','Javascript','PHP','ASP'],
	antwoord: 1
},

{
	vraag: 'Welk dier zit niet in het stappen spel?',
	antwoorden: ['Arend','Vos','Beer','Schildpad', 'Luiaard'],
	antwoord: 3
},

{
	vraag: "Hoe veel pagina's heeft deze site?",
	antwoorden: ['6','7','8'],
	antwoord: 2
},

{
	vraag: 'In welk font is deze website getypt?',
	antwoorden: ['Roboto','Runner', 'Elquard','zelf gemaakt lettertype'],
	antwoord: 3
},

{
	vraag: 'Welke van de volgende is geen hobby?',
	antwoorden: ['Schaken', 'Fietsen','Gamen','Series kijken'],
	antwoord: 0
},

{
	vraag: "In welk bestand zijn de pagina's geschreven?",
	antwoorden: ['HTML','PHP','ASP'],
	antwoord: 1
}
];

//Vraagnummer en aantal punten (1 punt per goed antwoord)
var vraagnum = 0;var punten = 0;
$(function ()
{
	$('#content').html('<h1>Welkom bij de quiz!</h1><br><button id="start">Start de quiz!');
	$('#start').click(function ()
	{
		newQuestion();
	});
});