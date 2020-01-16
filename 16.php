<!-- Write a PHP script to count number of lines in a file. -->


<?php
    $file_name = basename($_SERVER['PHP_SELF']);
    echo $no_of_lines = count(file($file_name)); 
?>