/*
Auteur:				Bram van den Broek
Startdatum:			17-1-2017 + 11:14
Bestandsnaam:		Script.js
*/

$(function ()
{
	ss();

	$(window).resize(function ()
	{
		ss();
	});

	//EXTRA MENU ---------------------------------------------------------------------------------
	$('#games').hide();


	$('#play img').mouseover(function ()
	{
		$(this).attr('src', 'pic/playh.png');
	});
	$('#play img').mouseleave(function ()
	{
		$(this).attr('src', 'pic/play.png');
	});
	$('#login img').mouseover(function ()
	{
		$(this).attr('src', 'pic/cijferh.png');
	});
	$('#login img').mouseleave(function ()
	{
		$(this).attr('src', 'pic/login.png');
	});
	$('#play').click(function ()
	{
		$('#games').stop().slideToggle(500);
	});
	$('#login').click(function ()
	{
		location.href = 'cijfer.php';
	});
});