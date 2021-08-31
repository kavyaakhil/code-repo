<?php

 function addBinary($a, $b) {
    $i = strlen($a) - 1;
    $j = strlen($b) - 1;
    $result = '';
    $s = 0;
   
   while($i>=0 || $j>=0 || $s==1) {
     $s += ($i != -1) ? $a[$i] : 0;
     $s += ($j != -1) ? $b[$j] : 0;
     
     $result = ($s%2).$result;
     
     $s = (int) ($s/2);
     
     $i--; $j--;
   }
   
   return $result;
 }

echo addBinary("01101", "10111");
?>

