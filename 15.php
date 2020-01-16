<!-- Write a PHP script to get last modified information of a file -->

<?php
    $file_name = basename($_SERVER['PHP_SELF']);
    $modified = filemtime($file_name); 
    echo "Last modified " . date("l, dS F, Y, h:ia", $modified)."\n";
?>