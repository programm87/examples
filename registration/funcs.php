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

