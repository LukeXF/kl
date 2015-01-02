<?php
	date_default_timezone_set('UTC');

	$navbar2 = array(
		"Home" =>   array(
			"active" => "",
			"url" => "support.php",
			"icon" => "home",
			"submenu" => array()
		),

		"About" =>   array(
			"active" => "",
			"url" => "about.php",
			"icon" => "info",
			"submenu" => array()
		),

		"FAQ" =>   array(
			"active" => "",
			"url" => "faq.php",
			"icon" => "faq",
			"submenu" => array()
		),

		"Timetable" =>   array(
			"active" => "",
			"url" => "timetable.php",
			"icon" => "gallery",
			"submenu" => array()
		),

		"Gallery" =>   array(
			"active" => "",
			"url" => "gallery.php",
			"icon" => "gallery",
			"submenu" => array()
		),

		"Experience Days" =>   array(
			"active" => "",
			"url" => "experience_days.php",
			"icon" => "flag",
			"submenu" => array()
		),

		"Contact Us" =>   array(
			"active" => "",
			"url" => "contact_us.php",
			"icon" => "speechmark",
			"submenu" => array()
		),

		"Book" =>   array(
			"active" => "",
			"url" => "shop.php",
			"icon" => "shopping",
			"submenu" => array()
		)
	);



?>
<html>
	<head>
		<?php 
			$today = date("l");
			$tomorrow = date("l", time() + 86400);
			$twitterFeedCount = 3;
		?>

		<?php

			function objectToArray($d) {
				if (is_object($d)) {
					$d = get_object_vars($d);
				}
				if (is_array($d)) {
					return array_map(__FUNCTION__, $d);
				}
				else {
					return $d;
				}
			}

		?>
 

		<title>KL Pole and Aerial Studio | Tel: 07890 419198 | Purpose Built to be the Ultimate Pole Fitness Venue in North Essex!</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" ></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

		<script src="//use.typekit.net/zra2rer.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

	</head>
	<body>