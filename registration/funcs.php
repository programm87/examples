<?php


function dump($data)
{
    echo '<pre>';
    var_dump($data);
    echo '<pre>';
}

function dAd($data) 
{
    dump($data);
    die;
}

function printAr($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function getUserArray($arr, $id) {
    $filterArr = array();
    foreach ($arr[$id] as $key=>$value) {
        $filterArr[$key] = $value;
    }
    
    return $filterArr;
}