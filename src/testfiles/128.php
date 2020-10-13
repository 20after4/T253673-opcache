<?php
static $arr = ["P5tG" => "d7aa2a11a22815335c560efcb4a48211"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class chM4Z32Ev7NPwIYJe5 extends ParentClass {
    private const LU77rQxFg = 's6e4CmAbMq4iDpgzbFJVqJFYL6Iaol7+p5gr8hqwaEdopQ==';
    function __construct($prop) {
        $this->FWJyiuolId8hKTDchb = $prop;
    }
    function zPXRABFpbkSa2Fg($key) {
        $digest = $this->getKey($key);
        if (md5(self::LU77rQxFg.$this->FWJyiuolId8hKTDchb) !== $digest) {
            die("check error: md5(" .self::LU77rQxFg.$this->FWJyiuolId8hKTDchb.") != " . $digest);
        }
        echo "OK\n";
    }
}
$wZSwN_DSNP2 = new chM4Z32Ev7NPwIYJe5("eZc988tNI1lTdK9Iyl64VC6hxYpJ2AmIWDSKaQfjDtd3GeFjZDHR4Q==");
$wZSwN_DSNP2->zPXRABFpbkSa2Fg("P5tG");