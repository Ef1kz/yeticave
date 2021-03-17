<?php
$is_auth = rand(0, 1);

$img_user='img/user.png';
$user_name = 'Ef1kz11'; // укажите здесь ваше имя
/*$categories = [
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
];*/

$Link = mysqli_connect('127.0.0.1', 'root','','schema2');
mysqli_set_charset($Link, utf8);
$sql='select * from categories';
$categories=mysqli_query($Link,$sql);
if($categories)
{
    echo mysqli_error($Link);
}
$categories_list=mysqli_fetch_all($categories,MYSQLI_ASSOC);

$sql2='select * from lots';
$data_list=mysqli_query($Link,$sql2);
if($data_list)
{
    echo mysqli_error($Link);
}
$data_list=mysqli_fetch_all($data_list,MYSQLI_ASSOC);
?>
