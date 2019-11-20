<?php
/***
 * Robert Wood Jr
 *
 *
 */

function average($var1, $var2)
{
    $varAve = ($var1 + $var2)/2;
    echo $varAve;
}


function largest($a,$b)
{
    if($a > $b){
        return $a;}
    else{
        return $b;
    }
}


$x = 5;
function printX()
{
    global $x;
     // or use {$Globals["x"];
    echo "x is $x <br/>";
}
printX();

function hello($name ="")
{
    echo "<h1>Hello, $name!</h1>";
}


function isValidYear($year)
{
    if(empty($year) OR !is_numeric($year) OR strlen($year != 4) OR $year > 2019)
    {
        return false;
    }

    return !empty($year) AND
        is_numeric($year
            AND strlen($year) == 4
            AND $year >= 2010);
}

function buckleMsg($num){
    if($num == 1 || $num == 2){
        echo "<p>Buckle my shoe</p>";
    }
    else if($num == 3 || $num == 4){
        echo "<p>Shut the door</p>";
    }
    else if($num == 5 || $num == 6){
        echo "<p>Pick up sticks</p>";
    }
    else if($num == 7 || $num == 8){
        echo "<p>Lay them straight</p>";
    }
    else if($num == 9 || $num == 10){
        echo "<p>A big fat hen!</p>";
    }
    else {
        echo "<p>INVALID!</p>";
    }
}