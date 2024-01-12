<?php
//Call By refer
function add(&$a,&$b){
    return $a + $b;
}
$a = 10;
$b = 5;
$total = add($a,$b);
print "This is a functions add =". $total ;
?>