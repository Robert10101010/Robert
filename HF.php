<?php
$sum=0;
$tomb=array();
for($i=0; $i<10; $i++) {
    $tomb[$i]=$i+1;
}
for($i=0; $i<10; $i++) {     
    echo $tomb[$i]. ' ' ;
        if ($tomb[$i] % 2 == 0) {
     
        } else {
        $sum += $tomb[$i];
        }
    }
    echo"<br>";
    echo $sum;
?>

