<?php


require_once("vendor/autoload.php");

use function Nfq\Akademija\NotTyped\calculateHomeWorkSum as calculateHomeWorkSum2;
use function Nfq\Akademija\Soft\calculateHomeWorkSum as calculateHomeWorkSum3;
use function Nfq\Akademija\Strict\calculateHomeWorkSum as calculateHomeWorkSum4;

use JakubOnderka\PhpConsoleColor\ConsoleColor;

$consoleColor = new ConsoleColor;

function calculateHomeWorkSum(...$numbers){
    $sum = 0;
    foreach ($numbers as $value){
        $sum += $value;
    };
    echo __FUNCTION__ . ':';
    return $sum;
}

try{
    echo $consoleColor->apply('bold', calculateHomeWorkSum(3, 2.2, '1')) . "\n";
    echo $consoleColor->apply('bold', calculateHomeWorkSum2(3, 2.2, '1')) . "\n";
    echo $consoleColor->apply('bold', calculateHomeWorkSum3(3, 2.2, '1')) . "\n";
    echo $consoleColor->apply('bold', calculateHomeWorkSum4(3, 2.2, '1')) . "\n";
}catch(\Throwable $e){
    echo "Klaida funkcijose!" . "\n";
    echo $e->getMessage();
}
