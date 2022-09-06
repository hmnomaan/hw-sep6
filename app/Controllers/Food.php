<?php

namespace Project\Controllers;

class Food
{

    public $id;
    public $name;
    public $price;
    public $stock;




    public function store($data)
    {

        session_start();
        $_SESSION['foodlist'][] = $data;


        // $foodlist = [['id' => '1112', 'name' => 'Kacchi', 'price' => '450', 'stock' => '1000'], ['id' => '1113', 'name' => 'Chicken Biriani ', 'price' => '450', 'stock' => '2000']];

        // echo "<pre>";
        // print_r($foodlist);



        // array_push($foodlist, $data);
        // print_r($foodlist);
        // array_push($_SESSION, $data);

        echo "<pre>";
        print_r($_SESSION);
    }
}
