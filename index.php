<?php 
class A
{}
class B extends A 
{
    public function __construct($a)
    {
        $this->a = $a;
    }
    protected $a;   
}
class C extends B
{
    public function __construct($a,$b,$c)
    {
        parent::__construct($a);
        $this->b = $b;
        $this->c = $c;  
    }
    protected $b;
    protected $c;
}


$a1 = new A();
$a2 = new A();


$b1 = new B($a1);
$b2 = new B($b1);

$c = new C($a1,$a2,$b2);

echo '<pre>';
var_dump($c);
echo '</pre>';
$c = new C(new A(),new A(),new B(new B(new A())));


//var_dump($c);



?>