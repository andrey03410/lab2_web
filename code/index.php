<?php
function task1()
{
    $very_bad_unclear_name = "15 chicken wings";
// Write your code here:
    $order = &$very_bad_unclear_name;
    $order .= ' and 5 cups of tea';
// Don't change the line below
    echo "\nYour order is: $very_bad_unclear_name.";
}

function task2()
{
    $var1 = 1;
    echo $var1 . "</br>";
    $var2 = 2;
    echo "$var2" . "</br>";
    $doubleVar = 6.78;
    echo $doubleVar . "</br>";
    echo 6 + 6 . "</br>";
    $last_month = 1187.23;
    $this_month = 1089.98;
    echo $last_month - $this_month . "</br>";
}

function task11()
{
    $num_languages = 4;
    $months = 11;
    $days = $months * 16;
    $days_per_language = $days / $num_languages;
    echo $days_per_language;
}

function task12()
{
    echo 8 ** 2;
}

function task13()
{
    $my_num = 322;
    $answer = $my_num;
    $answer += 2;
    $answer *= 2;
    $answer -= 2;
    $answer /= 2;
    $answer -= $my_num;
    echo $answer;
}

function task14()
{
    $a = 10;
    $b = 3;
    echo "Остаток от деления $a на $b = " . ($a % $b) . "</br>";

    if ($a % $b == 0) {
        echo "Делится" . "</br>";
    } else {
        echo "Не делится" . "</br>";
    }
    $st = pow(2, 10);
    echo $st . "</br>";
    echo sqrt(245) . "</br>";
    $arr = [4, 2, 5, 19, 13, 0, 10];
    $sum = 0;
    foreach ($arr as $item) {
        $sum += pow($item,2);
    }
    echo sqrt($sum) . "</br>";
    echo round(sqrt(379)) ." " . round(sqrt(379),1) ." ". round(sqrt(379),2) . "</br>";
    $arr2 = ['floor' => floor(sqrt(587)), 'ceil' => ceil(sqrt(587))];
    $arr = [4, -2, 5, 19, -130, 0, 10];
    echo min($arr) . "</br>";
    echo max($arr) . "</br>";
    echo rand(1, 100) . "</br>";
    $arr = [];
    for ($i = 0; $i < 10; $i++) {
        $arr[] = rand(1, 10);
    }
    print_r($arr);
    $a = -9;
    $b = 4;
    echo abs($a - $b) . "</br>";
    $arr = [1, 2, -1, -2, 3, -3];
    for ($i = 0; $i < count($arr); $i++) {
        $arr[$i] = abs($arr[$i]);
    }
    print_r($arr);
    

}

task14();
