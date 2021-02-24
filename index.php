<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>Mustache PHP example</title>
	</head>
	<body>
	This is Mustache PHP example<br>
	<?php
	require_once('Mustache/Autoloader.php');
	Mustache_Autoloader::register();
	$mustache = new Mustache_Engine(array(
	    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/templates')
	));
	$template = $mustache->loadTemplate('welcomepage');
	echo $template->render(array('firstname' => 'CHuong Tran', 'visitorNumber' => 7));
	?>
	</body>
	</html>
