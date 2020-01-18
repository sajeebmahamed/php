<!-- Write a PHP script to get the information about the operating system PHP is running on. -->
<?php
    echo php_uname();
    echo "<pre>";
    echo PHP_OS;

    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        echo "<pre>";
         echo 'This is a server using Windows!';
    } else {
        echo "<pre>";
        echo 'This is a server not using Windows!'."\n";
    }
?>