<?php
//Finction im PHP
//1.User-defined a function
function add($a,$b){
    $add = $a + $b;
    print "This is a function add $a + $b = .". $add . "<br />";
}
add(10, 5);

function sub($a,$b){
    $sub = $a - $b;
    print "This is a functions add $a - $b = ". $sub ."<br />";
}
sub(10,5);

function multiply($a, $b){
    $multiply = $a * $b;
    print "This is a functions add $a * $b = ." . $multiply . "<br />";
}
multiply(10,5);

function division($a,$b){
    $division = $a / $b;
    print "This is a functions add $a / $b = ." . $division . "<br />";
}
division(10,5);
?>