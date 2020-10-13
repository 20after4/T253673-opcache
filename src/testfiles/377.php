<?php
static $arr = ["pE5UtIH6IlIn" => "6d4d31eb6177035955b72c1fbf6111d1"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class J520 extends ParentClass {
    private const iAR = '9tFDasPAV5RuVS44YzzRelfpibAKRajhf+dbWCT9XPCe/FnenJ+mX2DSWd1mRA==';
    function __construct($prop) {
        $this->WI9Q = $prop;
    }
    function hBMyDPAhP7A7fGIg0S($key) {
        $digest = $this->getKey($key);
        if (md5(self::iAR.$this->WI9Q) !== $digest) {
            die("check error: md5(" .self::iAR.$this->WI9Q.") != " . $digest);
        }
        echo "OK\n";
    }
}
$r = new J520("qTTiAdicep5mY3xr8JkUK1rwl9XW48fc3ZhvG+xvKGE0WGnBrCQRW5aohQz3WpZL1rxFarB+nhclPiEKK4YDJXhb/g==");
$r->hBMyDPAhP7A7fGIg0S("pE5UtIH6IlIn");