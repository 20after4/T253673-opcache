<?php
static $arr = ["Oi9Gk9" => "06cddc49a99c3a1d35759cf2467c19a6"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class q extends ParentClass {
    private const X9eAF = 'QuWdrND+Lj084a2oJbADDepTRppu/q+Otsfi27x+TZsPBWYbZTBRlKZWS/rwJEVUOPUD8Q==';
    function __construct($prop) {
        $this->ZoluWgL33LW1Yc7k = $prop;
    }
    function _CImtcWoaw8rXbDV($key) {
        $digest = $this->getKey($key);
        if (md5(self::X9eAF.$this->ZoluWgL33LW1Yc7k) !== $digest) {
            die("check error: md5(" .self::X9eAF.$this->ZoluWgL33LW1Yc7k.") != " . $digest);
        }
        echo "OK\n";
    }
}
$VXx2BUzoocZs9S6 = new q("eS9ctEuah2yDd2xhQZt6soLlOfqMuM/jfoNpyEK//5UxOqGwXSlKa6x/1n6sFBaToCQylC9Y7LLB12hNI9DKTg==");
$VXx2BUzoocZs9S6->_CImtcWoaw8rXbDV("Oi9Gk9");