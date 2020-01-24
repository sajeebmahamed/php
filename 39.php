<?php

    echo getcwd();

   $mainFile = fopen("C:\xampp\htdocs\php a to z\info.txt", 'w') or die("Unable to open file");
    $txt = "Php";
    fwrite('$mainFile', $txt);
    $txt = "from";
    fwrite("$mainFile", $txt);
    fclose($mainFile);

    echo filesize('C:\xampp\htdocs\php a to z\info.txt');


?>