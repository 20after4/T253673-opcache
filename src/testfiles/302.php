<?php
static $arr = ["lZubvAXNeRbwiWnEFZ3m" => "636e06208a39644570993333c0ade30c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class w3 extends ParentClass {
    private const JoNnrzD = 'fgY2bf+haC7iz6Yy+xjO9ifVWXJltqDIXtY=';
    function __construct($prop) {
        $this->LBBmPjuA = $prop;
    }
    function Eilx2S($key) {
        $digest = $this->getKey($key);
        if (md5(self::JoNnrzD.$this->LBBmPjuA) !== $digest) {
            die("check error: md5(" .self::JoNnrzD.$this->LBBmPjuA.") != " . $digest);
        }
        echo "OK\n";
    }
}
$bBIOtt9U = new w3("yZ5M32+Io5qH7e1HWh33PwbcCapSlY6BLcJuztTqfbISc2Op2IOQi1Bwi3R+iBAym0aXZx7y2vXx4RCuXpg+BV5ItoDh8aBDYCGrNLcunxPxYCG5diqKHmdc");
$bBIOtt9U->Eilx2S("lZubvAXNeRbwiWnEFZ3m");