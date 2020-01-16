<?php
	
	// $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document.
		
	// Sample Output :

	// PHP Tutorial
	// PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose
	// scripting language. It is a cross-platform, HTML embedded server-side scripting language andis especially suited for web development.

	// 	Go to the PHP Tutorial.
	
	$var = 'PHP Tutorial';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $var; ?></title>
</head>
<body>
	<h3><?php echo $var ?></h3>
	<p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose
	scripting language. It is a cross-platform, HTML embedded server-side scripting language andis especially suited for web development.</p>
	<p><a href="http://localhost/php%20a%20to%20z/3.php"><?php echo $var?></a></p>
</body>
</html>