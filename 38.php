 <!-- Write a PHP program to valid an email address. -->
 <?php
    function valid_email($email)
    {
        $mail = trim($email);
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
            return "true";
        }else{
            return "false";
        }
    }
    echo valid_email('test@mail.com');
    echo valid_email('testmail.com');

    
   
 ?>