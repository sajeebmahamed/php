<!-- Write a PHP program to calculate the mod of two given integers without using any inbuilt modulus operator. -->
<?php
    function mod($a,$b)
    {
        $div = (int)($a/$b);
        return $a-$b*$div;
    }
    echo mod(13,2);
    echo mod(81,3);

?>