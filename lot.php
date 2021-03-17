<?php
require_once('functions.php');
require 'data.php';

$currentLot=null;
if(isset($_GET['id']))
{
    $lotID=intval($_GET['id']);
    foreach ($data_list as $lot)
    {
        if(intval($lot['lot_id'])==$lotID)
        {
            $currentLot=$lot;
            break;
        }
    }
}

if(!$data_list[$lotID])
{
    http_response_code(404);
    exit;
}

$page_content = compile_template('lot.php',
    ['categories' => $categories,
        'lot'=>$currentLot,
        'lotID'=>$lotID,
        'data_list' => $data_list,
        'time_page'=>$times_pages]);

$layout_content = compile_template('layout.php',
    ['page_title' => 'Главная страница',
        'is_auth' => $is_auth,
        'user_name' => $user_name,
        'page_content'=>$page_content,
        'categories'=>$categories,
        'img_user'=>$img_user]);
print ($layout_content);
?>
