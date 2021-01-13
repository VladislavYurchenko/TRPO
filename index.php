<?php

use yurchenko\MyLog;
use yurchenko\Quadratic;
use yurchenko\YurchenkoException;

include './core/core/EquationInterface.php';
include './core/core/LogAbstract.php';
include './core/core/LogInterface.php';
include './yurchenko/Line.php';
include './yurchenko/Quadratic.php';
include './yurchenko/MyLog.php';
include './yurchenko/YurchenkoExceprion.php';



$b = new Quadratic();

MyLog::log("Версия программы ".file_get_contents("./version"));
try{
    $values = array();
    for($i=1; $i<4; $i++){
        echo "Введите ".$i." аргумент: ";
        $values[]=floatval(readline());
    }
    $va = $values[0];
    $vb = $values[1];
    $vc = $values[2];

    MyLog::log("Введено уравнение ".$va."x^2 + ".$vb."x + ".$vc." = 0");
    $x = $b->equation2($va,$vb,$vc);

    $str = implode(", ", $x);
    MyLog::log("\nКорни уравнения: ".$str);
    }catch(YurchenkoException $e){
        MyLog::log($e->getMessage());
    }

    MyLog::write();
