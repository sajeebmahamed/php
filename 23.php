<!-- Write a PHP script to compare the PHP version. -->
<?php
    // print_r(version_compare(PHP_VERSION, '7.0.0'));
    if(version_compare(PHP_VERSION, '7.0.0')){
        echo PHP_VERSION;
    }
?>