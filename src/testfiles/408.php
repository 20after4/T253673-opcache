<?php
static $arr = ["ddvnHiwL0eFN4BJ77S9" => "6919361687cfdddd3973a7de0dbd4630"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class QW extends ParentClass {
    private const GxIUvBGSEHTfYn2NW1Ig = 'vBGoaLIgxdKIYyMNO7ny5Q==';
    function __construct($prop) {
        $this->sdFnpY9wr = $prop;
    }
    function KoPn($key) {
        $digest = $this->getKey($key);
        if (md5(self::GxIUvBGSEHTfYn2NW1Ig.$this->sdFnpY9wr) !== $digest) {
            die("check error: md5(" .self::GxIUvBGSEHTfYn2NW1Ig.$this->sdFnpY9wr.") != " . $digest);
        }
        echo "OK\n";
    }
}
$iY = new QW("tVriywev+8KKPfNLTW9+FP0=");
$iY->KoPn("ddvnHiwL0eFN4BJ77S9");