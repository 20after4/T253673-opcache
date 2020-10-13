<?php
static $arr = ["iR5H" => "f91220b66aa606fdf66edeba3646a9ca"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class N7AbukzFt2t2lRKYlaRz extends ParentClass {
    private const Mou0n = 'CH76Eada2gALDrLDWR3ZfHlNsh3fa8M1NjVeBCFywtGj02Pk1y/Qmw3PzkY=';
    function __construct($prop) {
        $this->pJ = $prop;
    }
    function l3dHrpKXs62iH($key) {
        $digest = $this->getKey($key);
        if (md5(self::Mou0n.$this->pJ) !== $digest) {
            die("check error: md5(" .self::Mou0n.$this->pJ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$kJjKCCgnBmgdF = new N7AbukzFt2t2lRKYlaRz("Hl4KH8ajalnBEPnJBkNlFW/XAXjhUvUY8fOY/Vy3TwgwZGX091HLJv29T8cXbN5W7nSmuFCagriLmWQYqsM+tsQZZVu9j7pWNnL8AG3AUQ==");
$kJjKCCgnBmgdF->l3dHrpKXs62iH("iR5H");