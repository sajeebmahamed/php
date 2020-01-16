<!-- Write a simple PHP program to check that emails are valid. -->
<?php
    $mail = "sajeebxn@gmail.com";
    if(filter_var($mail, FILTER_VALIDATE_EMAIL))
    {
        echo "The Email ".$mail." is valid";
    }
    else
    {
        echo "The Email".$mail."is invalid";
    }
?>