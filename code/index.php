<?php
function task1(){
    $very_bad_unclear_name = "15 chicken wings";
// Write your code here:
    $order = & $very_bad_unclear_name ;
    $order .= ' and 5 cups of tea';
// Don't change the line below
    echo "\nYour order is: $very_bad_unclear_name.";
}

function task2(){
    $var1 = 1;
    echo $var1 . "</br>";
    $var2 = 2;
    echo "$var2" . "</br>";
    $doubleVar = 6.78;
    echo  $doubleVar . "</br>";
    echo 6+6 . "</br>" ;
    $last_month = 1187.23;
    $this_month = 1089.98;
    echo $last_month-$this_month . "</br>";
}

function task11(){
    $num_languages = 4;
    $months = 11;
    $days = $months * 16;
    $days_per_language = $days / $num_languages;
    echo $days_per_language;
}

function task12(){
    echo 8 ** 2;
}
