<?php

/* 1. В строке текста записаны слова, разделенные пробелами в произвольном количестве.
Сжатие текста состоит в том, что между словами оставляется по одному пробелу, а после
последнего слова пробелы удаляются (пробелы перед первым словом сохраняются). Сжатый текст
записать в другую переменную. Если строка содержит только пробелы, то все они сохраняются. */

function firstTask($first_task_string)
{
    if (ctype_space($first_task_string)) {
        return $first_task_string;
    } else {
        return preg_replace("/\s+/", " ", $first_task_string);
    }
}

// 2. В произвольном тексте найти и вывести на экран все слова длина которых не менее трёх символов и не более пяти.

function secondTask($second_task_string)
{
    $explode_string = explode(' ', $second_task_string);
    for ($i = 0; $i < count($explode_string); $i++) {
        if (((mb_strlen($explode_string[$i]) >= 3)) && ((mb_strlen($explode_string[$i]) <= 5))) {
            $selected_words[] = $explode_string[$i];
        }
    }
    return $selected_words;
}

/* 3. Вводится строка. Удалить из нее все пробелы. После этого определить, является ли она палиндромом (перевертышем),
т.е. одинаково пишется как с начала, так и с конца. */

function thirdTask($third_task_string)
{
    $low_string = mb_strtolower($third_task_string);
    $str_replace_string = str_replace(' ', '', $low_string);
    $third_task_string = iconv('utf-8', 'windows-1251', $str_replace_string);
    $third_task_string = strrev($third_task_string);
    $third_task_string = iconv('windows-1251', 'utf-8', $third_task_string);
    if ($str_replace_string == $third_task_string) {
        return "true";
    } else {
        return "false";
    }
}

/* 4.Найти самое длинное слово и вывести его на экран. Случай, когда самых длинных слов может быть несколько,
не обрабатывать. */

function fourTask($four_task_string)
{
    $string_explode = explode(" ", $four_task_string);
    $max = $string_explode[0];
    foreach ($string_explode as $element) {
        if (mb_strlen($element) > mb_strlen($max)) {
            $max = $element;
        }
    }
    return $max;
}

// 5. Посчитать количество строчных и прописных букв в строке

function fiveTask($five_task_string)
{
    $five_task_string = preg_replace("/[\s,.]+/", "", $five_task_string);
    $five_task_string = mb_str_split($five_task_string);
    $u = 0;
    $l = 0;
    foreach ($five_task_string as $element) {
        if ($element === mb_strtoupper($element)) {
            $u += 1;
        } else {
            $l += 1;
        }
    }
    return ['Кол-во строчных букв в строке' => $u, 'Кол-во прописных букв в строке' => $l];
}


