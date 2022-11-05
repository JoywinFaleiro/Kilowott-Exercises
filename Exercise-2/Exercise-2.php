<?php
 function ordinal($number) 
{
    $ends = array('th','first','second','third','th','th','th','th','th','th');
    if ((($number % 100) >= 11) && (($number%100) <= 13))
       return $number. 'th';
    else
       return  $ends[$number % 10];
}
echo ordinal('3');
?>