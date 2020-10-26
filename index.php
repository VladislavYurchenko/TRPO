<?php

use yurchenko\MyLog;

include './core/EquationInterface.php';
include './core/LogAbstract.php';
include './core/LogInterface.php';
include './yurchenko/Line.php';
include './yurchenko/Quadratic.php';
include './yurchenko/MyLog.php';

$a = MyLog::Instance();
$b = MyLog::Instance();

$a->log('1');
$a->log('2');
$a->log('3');
$a->log('4');
$b->write();


?>