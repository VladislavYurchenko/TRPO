<?php 
class A
{
    protected $x;   
    function equation($a,$b){
        if($a==0){
            return false;
        }
        $x = -$b/$a;
        $this->x = $x;
        return $x;
    }
}
class B extends A 
{
    function equation2($a,$b,$c){
        $d = $this->discriminant($a,$b,$c); 
        if($a==0){
            return $this->x = $this->equation($b,$c);
            //eturn $this->equation($b,$c);
        }
        if ($d<0){
            $this->x = false;
            return false;
        }
        $d = sqrt($d);
        $x1 = ((-$b) + $d) / (2 * $a);
        $x2 = ((-$b) - $d) / (2 * $a);
        if($x1 == $x2){
            $this->x = $x1;
            return $x1;
        }else{
            $this->x = array($x1,$x2);
            return  array($x1,$x2);
        }
    }
    protected function discriminant($a,$b,$c){
        $d =  $b * $b - 4 * $a * $c;
        return $d;
    }   
}

$a = new A();
$b = new B();

//var_dump($b)
 var_dump($b->equation2(1,4,3)); 
?>