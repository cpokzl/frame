<?php
namespace Common;

class MaleUserStrategy implements UserStrategy
{
    function showAd(){
        echo "IPhone11";
    }

    function showCategory(){
        echo "电子产品";
    }
}