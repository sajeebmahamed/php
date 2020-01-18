<!-- Write a PHP script to get the names of the functions of a module. -->
<?php
    echo "<pre>";
    print_r(get_extension_funcs("JSON"));
    echo "<pre>";
    print_r(get_extension_funcs("XML"))."\n";
?>