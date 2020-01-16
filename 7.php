<?php
	//Write a PHP script to get the current file name.

	$val = basename($_SERVER['PHP_SELF']);
	echo $val;
?>