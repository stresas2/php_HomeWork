<?php

namespace Nfq\Akademija\Soft;

function calculateHomeWorkSum(int...$numbers) :int
{
    $sum = 0;
    foreach ($numbers as $value){
        $sum += $value;
    };
    echo  __FUNCTION__ .  ':';
    return $sum;
};
