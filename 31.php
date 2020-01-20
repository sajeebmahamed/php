 <!-- Write a PHP program to swap two variables. -->

<?php
// Swap two variables value without using third variable
    $a =  5;
    $b = 6;

    echo "Before Swaping a = ". $a ."and b = " .$b;
    
    list($a,$b) = array($b,$a);

     echo "Before Swaping a = ". $a ."and b = " .$b;

    //  Swap two numbers using a third variable
    $a = 5;
    $b = 6;

    echo "Number a =".$a." and b=".$b;

    $temp = $a;
    $a = $b;
    $b = $temp;
    
    echo "Number a =".$a." and b=".$b."\n";

?>