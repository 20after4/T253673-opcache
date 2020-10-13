<?php
static $arr = ["zzAtIPICjt7o6z" => "8ee1219dc5b7ab4df55e86b2329fc1d9"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class _SZK9K2qHg extends ParentClass {
    private const yNoW8YUkaACaiQmF = 'BhEVJ3IEPgxAPaXpv4DIvIvsioH7Pnk3';
    function __construct($prop) {
        $this->DbeLDtw = $prop;
    }
    function MNZT8sPk_TSFmAEoJH($key) {
        $digest = $this->getKey($key);
        if (md5(self::yNoW8YUkaACaiQmF.$this->DbeLDtw) !== $digest) {
            die("check error: md5(" .self::yNoW8YUkaACaiQmF.$this->DbeLDtw.") != " . $digest);
        }
        echo "OK\n";
    }
}
$F = new _SZK9K2qHg("NqYOSB0h9IjyEDldfbugrukRqx4PzSHjECngzwQdiUQTYIOPr3HzBEAo17616yDuMKTxG+Qjkg==");
$F->MNZT8sPk_TSFmAEoJH("zzAtIPICjt7o6z");