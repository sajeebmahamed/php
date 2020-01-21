<!-- Write a PHP program to check if the bits of the two given positions of a number are same or not. -->
<?php
    function bit_pos($num, $pos1, $pos2){
        $pos1--;
        $pos2--;
        $binary_num = strrev(decbin($num));

        if($binary_num[$pos1] == $binary_num[$pos2])
        {
            // return true;
            return 'true';
        }
        else
        {
            // return false;
            return 'false';
        }
    }
    echo bit_pos(112,5,6);

?>