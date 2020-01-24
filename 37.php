<!-- Write a PHP program to compute the sum of the prime numbers less than 100. -->
<?php
$prime = array();
$prime_no = false;
    for($i = 2; $i<=100; $i++)
    {
        $prime_no =true;
        for($j = 2; $j<=($i/2); $j++)
        {
            if($i%$j == 0)
            {
                $prime_no = false;
                 break;
            }
           
        }
        if($prime_no)
        {
            array_push($prime, $i);
        }
        if(count($prime) == 100)
        {
        break;
        }
    }
    echo array_sum($prime);
?>