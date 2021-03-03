<?php
$is_auth = rand(0, 1);
$img_user='img/user.png';
$user_name = 'Ef1kz11'; // укажите здесь ваше имя
$categories = [
    "Boards" => "Доски и лыжи",
    "Mountings" => "Крепления",
    "Boots" => "Ботинки",
    "Clothes" => "Одежда",
    "Tools" => "Инструменты",
    "Other" => "Разное"
];
$data_list = [

    [
        'name' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи',
        'price' => 10999,
        'gif' => 'img/lot-1.jpg'
    ],
    [
        'name' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи',
        'price' => 159999,
        'gif' => 'img/lot-2.jpg'
    ],
    [
        'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'price' => 8000,
        'gif' => 'img/lot-3.jpg'
    ],
    [
        'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'Ботинки',
        'price' => 10999,
        'gif' => 'img/lot-4.jpg'
    ],
    [
        'name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => 'Одежда',
        'price' => 7500,
        'gif' => 'img/lot-5.jpg'
    ],
    [
        'name' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'price' => 5400,
        'gif' => 'img/lot-6.jpg'
    ]
]
;

function sum_format ($number)
{
    $withRubleElem=true;
    $number=ceil($number);
    $price=$number;
    if ($number>=1000)
    {
        $price= number_format ($number,0, '.', ' ');
    }
    else
    {
        $price=$number;
    }
    if ($withRubleElem==true)
    {
        return $price . '<b class=\"rub\">р</b></b>';
    }
    else
    {
        return $price;
    }
}
function compile_template( $name, $data)
{
    $name = 'templates/' . $name;     $result = '';

    if (!file_exists($name))
    {
        return $result;
    }

    ob_start();
    extract($data);
    require ($name);

    $result = ob_get_clean();

    return $result;
}


?>
