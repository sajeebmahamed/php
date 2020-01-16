<!-- Write a PHP script, to check whether the page is called from 'https' or 'http'. -->
<?php
    if(!empty($_SERVER['HTTPS']))
    {
        echo 'https';
    }
    // else if(!empty($_SERVER['HTTP']))
    // {
    //     echo 'http';
    // }
    else{
        echo "http";
    }
?>