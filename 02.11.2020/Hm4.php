<?php
//Hm4

/* 1. В строке текста записаны слова, разделенные пробелами в произвольном количестве.
Сжатие текста состоит в том, что между словами оставляется по одному пробелу, а после
последнего слова пробелы удаляются (пробелы перед первым словом сохраняются). Сжатый текст
записать в другую переменную. Если строка содержит только пробелы, то все они сохраняются. */

echo "1-ое задание" . "<br>";
$string = " Debating  me    breeding     be answered     an he. Spoil event was  words  her off cause any.   ";
if (ctype_space($string)) {
    echo $string;
} else {
    $result = preg_replace("/\s+/", " ", $string);
    echo $string;
}

// 2. В произвольном тексте найти и вывести на экран все слова длина которых не менее трёх символов и не более пяти.

echo "<br>" . "2-ое задание" . "<br>";
$string = "Debating me breeding be answered an he. Spoil event was words her off cause any.";
$explode_string = explode(' ', $string);
echo "<br>";
for ($i = 0; $i < count($explode_string); $i++) {
    if (((strlen($explode_string[$i]) >= 3)) && ((strlen($explode_string[$i]) <= 5))) {
        var_dump($explode_string[$i]);
        echo "<br>";
    }
}

/* 3. Вводится строка. Удалить из нее все пробелы. После этого определить, является ли она палиндромом (перевертышем),
т.е. одинаково пишется как с начала, так и с конца. */

echo "<br>" . "3-ье задание" . "<br>";
$string = "А муза рада музе без ума да разума";
$low_string = mb_strtolower($string);
$str_replace_string = str_replace(' ', '', $low_string);
$string = iconv('utf-8', 'windows-1251', $str_replace_string);
$string = strrev($string);
$string = iconv('windows-1251', 'utf-8', $string);
if ($str_replace_string == $string) {
    echo "true";
} else {
    echo "false";
}

/* 4.Найти самое длинное слово и вывести его на экран. Случай, когда самых длинных слов может быть несколько,
не обрабатывать. */

echo "<br>" . "4-ое задание" . "<br>";
$string = 'Debating me breesding be answered an he. Spoil event was words her off cause any.';
$string_explode = explode(" ", $string);
$max = $string_explode[0];
for ($i = 1; $i < count($string_explode); $i++) {
    if (strlen($string_explode[$i]) > strlen($max)) {
        $max = $string_explode[$i];
    }
}
echo $max;

// 5. Посчитать количество строчных и прописных букв в строке

echo "<br>" . "5-ое задание" . "<br>";
$data = "Debating me breesding be answered an he. Spoil event was words her off cause any.";
$data = str_split($data);
$u = 0;
$l = 0;
for ($i = 0; $i < count($data); $i++) {
    if (ctype_upper($data[$i])) {
        $u += 1;
    } else {
        if (ctype_lower($data[$i])) {
            $l += 1;
        }
    }
}
echo "Кол-во строчных букв в строке = " . $u . "<br>";
echo "Кол-во прописных букв в строке = " . $l;