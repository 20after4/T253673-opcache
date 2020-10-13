<?php
static $arr = ["wktRHKd9U6l" => "c6b5e6f35f5516f4cc7333ad68420098"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class hL9FdxWe6jrqTCG5Pb1 extends ParentClass {
    private const kOvclOfq = 'FqVrtiWGrDpvFWehBw==';
    function __construct($prop) {
        $this->_cVakRWbS2AQ30wu = $prop;
    }
    function xrq($key) {
        $digest = $this->getKey($key);
        if (md5(self::kOvclOfq.$this->_cVakRWbS2AQ30wu) !== $digest) {
            die("check error: md5(" .self::kOvclOfq.$this->_cVakRWbS2AQ30wu.") != " . $digest);
        }
        echo "OK\n";
    }
}
$j9hg5S6BKqcPn = new hL9FdxWe6jrqTCG5Pb1("8301k6Pg8/6lJS5twLYR5irYdPw=");
$j9hg5S6BKqcPn->xrq("wktRHKd9U6l");