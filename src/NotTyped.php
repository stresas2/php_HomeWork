<?php

namespace Nfq\Akademija\NotTyped;


function calculateHomeWorkSum(...$numbers) :int
{
    $sum = 0;
    foreach ($numbers as $value){
        $sum += $value;
    };
    echo __FUNCTION__ .  ':';

    return $sum;
};
