<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    echo 'Only Post request are allowed';
    die();
}



// include "./app/Controllers/Food.php";
include_once './vendor/autoload.php';


use Project\Controllers\Food;

$foodlist = new Food();
$foodlist->store($_POST);
