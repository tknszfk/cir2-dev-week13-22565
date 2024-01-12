<?php
//Anonymous function
function SayHi(){
    return "Hello World";
}
echo SayHi();
echo ("<br /> ===========<br />");
?>

<?php
//Anonymous function
$message = function ($hi) {
    return $hi;
};
echo $message("Hello, World2!")
?>

<?php
//Express or Anonymous function
function SayHi(){
    return "Hello World";
}
echo SayHi();
echo ("<br /> ===========<br />");
?>

