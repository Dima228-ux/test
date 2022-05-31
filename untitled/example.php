<?php

function translit($value)
{
    $converter = array(
        'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
        'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
        'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
        'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
        'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
        'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
        'э' => 'e',    'ю' => 'yu',   'я' => 'ya',

        'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
        'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
        'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
        'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
        'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
        'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
        'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
    );

    $value = strtr($value, $converter);
    return $value;
}

$str=$_POST['fstr'];
$str2=null;
if($str!=null) {
    $str = translit($str);

    $char = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $str = str_replace($char, '', $str);

    $count = strlen($str);

    if ($count % 2 == 0)
        $str = strtolower($str);
    else
        $str = strtoupper($str);

    $str2 = str_split($str);
if($count>3) {
    foreach ($str2 as $key => $val) {
        if ($key > 0) {
            if ($key % 3 == 0) $str2 [$key - 1] = '_';
        }

    }
}else{
    $str2[2]='_';
}

    $str = implode('', $str2);
    $count = strlen($str);
    if ($count > 10)
        $str = substr($str, 0, 10) . '' . '...';

}
else{
    $str="пустая строка";
}

$answer=array("status"=>"$str");

echo json_encode($answer);








