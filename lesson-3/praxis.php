<?php
//task 1

$i = 0;
while ($i <= 100) {
    if (!($i % 3)) {
        echo $i . "\n";
    }
    $i++;
}

//task 2
$i = 0;
do {
    if ($i == 0) {
        echo "$i - ноль.\n";
    } elseif ($i % 2) {
        echo "$i - нечетное число.\n";
    } else {
        echo "$i - четное число.\n";
    }
    $i++;
} while ($i <= 10);

//task 3
$arr = [
    'Московская область' => ['Москва','Зеленоград','Клин'],
    'Ленинградская область' => ['Санкт-Петербург','Всеволожск','Павловск','Кронштадт'],
    'Рязанская область' => ['Рязань','Шилово','Касимов']
];
foreach ($arr as $key => $item) {
    echo "$key:\n";
    if (is_array($item)) {
        foreach ($item as $city) {
            if ($item[count($item) - 1] == $city) {
                echo "$city \n";
            } else echo "$city, ";
        }
    }
}

//task 7
for ($i = 0; $i < 10; print $i++ . "\n") {}


//task 8
foreach ($arr as $key => $item) {
    echo "$key:\n";
    if (is_array($item)) {
        foreach ($item as $city) {
            if (mb_substr($city,0,1) == 'К') {
                echo "$city \n";
            }
        }
    }
}
