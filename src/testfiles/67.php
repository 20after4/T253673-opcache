<?php
static $arr = ["YM_VtCZgsesrNtNKFL9" => "36ea5ea0877f066b04c373b2c3b2ac20"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class oXx5XtA extends ParentClass {
    private const gS6pJphyrAPv = 'geBxrC0JZJjS/7sdWHXMcSWj2oaSUatBDV3KdnQejsA3Ha3VgfCbmIR3eCQN0agaPY4hvEpHlcZccRR8Nh6/C+MIXwY=';
    function __construct($prop) {
        $this->it0XLB16LIerjyh = $prop;
    }
    function hzLIRctqTiGroJKkQ($key) {
        $digest = $this->getKey($key);
        if (md5(self::gS6pJphyrAPv.$this->it0XLB16LIerjyh) !== $digest) {
            die("check error: md5(" .self::gS6pJphyrAPv.$this->it0XLB16LIerjyh.") != " . $digest);
        }
        echo "OK\n";
    }
}
$tkp1 = new oXx5XtA("ZrDRX56r7sheZ7j+0S1Z7WUz0WwsCjpaOos9i0SYGUrzc+k=");
$tkp1->hzLIRctqTiGroJKkQ("YM_VtCZgsesrNtNKFL9");