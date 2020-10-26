<?php 
namespace yurchenko;

use core\EquationInterface;

class Line implements EquationInterface
{
    protected $x;   
    function solve($a, $b, $c ){
        if($a==0){
            return false;
        }
        $x = -$b/$a;
        $this->x = $x;
        return $x;
    }
}
?>