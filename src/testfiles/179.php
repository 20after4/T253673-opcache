<?php
static $arr = ["R3ihJL" => "a86c4ac87a65b5cb01f048031d8bf645"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class iAQ0zO1v7NF extends ParentClass {
    private const bg9NFgLNa = 'ndOizIT7YvabEqS/KQhrS+F5HY3nQnLSKlzi6WwA/ocYCUyCkXZdYqdkplgFHIEwGWV4r21D';
    function __construct($prop) {
        $this->I_SeUaRMyq = $prop;
    }
    function oXAw($key) {
        $digest = $this->getKey($key);
        if (md5(self::bg9NFgLNa.$this->I_SeUaRMyq) !== $digest) {
            die("check error: md5(" .self::bg9NFgLNa.$this->I_SeUaRMyq.") != " . $digest);
        }
        echo "OK\n";
    }
}
$rZnbpaTZBKvjeco = new iAQ0zO1v7NF("LRIq/XbEDD4tBYEEpvn5CfzPwmMTuWJWxroKZO+EzAFxAlPkIqYQBdG+KWG60jjU9ZR8MmZP4x5iCrScj8X5/5lJP6aqh2NLaCKH");
$rZnbpaTZBKvjeco->oXAw("R3ihJL");