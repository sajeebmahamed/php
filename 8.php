<?php
	
	// Write a PHP script, which will return the following components of the url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'. 

	// List of components : Scheme, Host, Path
	// Expected Output :
	// Scheme : http
	// Host : www.w3resource.com
	// Path : /php-exercises/php-basic-exercises.php

	$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';

	$url = parse_url($url);

	echo 'Scheme : '.$url['scheme'];
	echo '<pre>';
	echo 'Host : '.$url['host'];
	echo '<pre>';
	echo 'Path : '.$url['path'];

?>