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
//task 4

function translate_string($str) {
    $alfabet = [
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
        ];
    $newStr = '';
    for ($i = 0; $i < strlen($str); $i++) {
        if (mb_strtolower(mb_substr($str, $i, 1)) == mb_substr($str, $i, 1)) {
            $newStr .= $alfabet[mb_substr($str, $i, 1)];
        } else $newStr .= strtoupper($alfabet[mb_strtolower(mb_substr($str, $i, 1))]);
    }
    return $newStr;
}

//task 5
function modify_string($str) {
    $newStr = str_replace(' ', '_', $str);
    return $newStr;
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
