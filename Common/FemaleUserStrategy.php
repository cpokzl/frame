<?php
namespace Common;

class FemaleUserStrategy implements UserStrategy
{
    function showAd(){
        echo "2020新款女装";
    }

    function showCategory(){
        echo "女装";
    }
}