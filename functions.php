<?php
require_once('data.php');

function time_page()
{
    $now=strtotime('now');
    $tomorrow=strtotime('tomorrow');
    $time=$tomorrow-$now;
    $hour=floor($time/3600);
    $minut=floor(($time%3600)/60);
    $time=sprintf("%02d:%02d",$hour,$minut);
    return($time);

}


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
        return $price;
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
