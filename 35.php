<!-- Write a PHP program to remove duplicates from a sorted list. -->
<?php
    function rmve_dupli($list){
        $unq_num = array_values(array_unique($list));
        return $unq_num;
    }
    $num = array(2,2,3,3,4,5);
    $action = rmve_dupli($num);
    print_r($action);
?>