<?php
// task 1:
$a = mt_rand(-100, 100);
$b = mt_rand(-100, 100);

echo "a = $a , b = $b \n";
if ($a >= 0 && $b >= 0) {
    echo $a - $b . "\n";
} elseif ($a < 0 && $b < 0) {
    echo $a * $b . "\n";
} else {
    echo $a + $b . "\n";
}

// task 2:
$a = mt_rand(0, 15);

switch ($a) {
    case 0:
        echo "0 \n";
    case 1:
        echo "1 \n";
    case 2:
        echo "2 \n";
    case 3:
        echo "3 \n";
    case 4:
        echo "4 \n";
    case 5:
        echo "5 \n";
    case 6:
        echo "6 \n";
    case 7:
        echo "7 \n";
    case 8:
        echo "8 \n";
    case 9:
        echo "9 \n";
    case 10:
        echo "10 \n";
    case 11:
        echo "11 \n";
    case 12:
        echo "12 \n";
    case 13:
        echo "13 \n";
    case 14:
        echo "14 \n";
    case 15:
        echo "15 \n";
}

// task 3:

function sum($a, $b){
    return $a + $b;
}
function sub($a, $b){
    return $a - $b;
}
function mult($a, $b){
    return $a * $b;
}
function div($a, $b){
    if ($b == 0){
        echo 'Ошибка при делении на 0';
    } else {
        return $a / $b;
    }
}

// task 4:
function mathOperation($a, $b, $op){
    switch ($op) {
        case '+':
            return sum($a, $b);
        case '-':
            return sub($a, $b);
        case '*':
            return mult($a, $b);
        case '/':
            return div($a, $b);
        default:
            return 'Unrecognized operation';
    }
}

// task 6:
function power($a, $b) {
    if ($b < 0) {
        return 'Отрицательные степени недоступны';
    } elseif ($b == 0) {
        return 1;
    } elseif ($b == 1) {
        return $a;
    } else {
        return $a * power($a, ($b - 1));
    }
}
// task 6 (closure):
$power2 = function($a, $b) use (&$power2) {
    if ($b < 0) {
        return 'Отрицательные степени недоступны';
    } elseif ($b == 0) {
        return 1;
    } elseif ($b == 1) {
        return $a;
    } else {
        return $a * $power2($a, ($b - 1));
    }
};
// task 7:

function checkMinutes($b) {
    switch ($b) {
        case (($b == 0) || ($b >= 5 && $b <=20) || ($b >= 25 && $b <=30) || ($b >= 25 && $b <=30) || ($b >= 35 && $b <=40) || ($b >= 45 && $b <=50) || ($b >= 55 && $b <=59)):
            return "$b минут";
        case ($b == 1 || $b == 21 || $b == 31 || $b == 41 || $b == 51):
            return "$b минута";
        case (($b >= 2 && $b <= 4) || ($b >= 22 && $b <= 24) || ($b >= 32 && $b <= 34) || ($b >= 42 && $b <= 44) || ($b >= 52 && $b <= 54)):
            return "$b минуты";
    }
}
function getCurrentTime($a, $b) {
    switch ($a) {
        case ($a == 0 || ($a >= 5 && $a <=20)):
            return "$a часов " . checkMinutes($b);
        case ($a == 1 || $a == 21):
            return "$a час " . checkMinutes($b);
        case ($a >= 2 && $a <= 4) || $a == 22 || $a == 23:
            return "$a часа " . checkMinutes($b);
    }
}
echo getCurrentTime(date("H"), date("i"));