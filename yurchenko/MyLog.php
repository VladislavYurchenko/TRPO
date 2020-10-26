<?php 

namespace yurchenko;

use core\LogInterface;
use core\LogAbstract;

class MyLog extends LogAbstract implements LogInterface
{
    public static function log($str)
    {
        
        array_push(self::$log,$str);
    }
    public function _write()
    {
        foreach(MyLog::$log as $el){
            echo $el;
        }
    }
   
    public static function write()
    {
        return MyLog:: _write();
    }
}

