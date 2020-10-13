<?php
static $arr = ["vbr4QPyI" => "f79e36d07d7e5de7f19d8eb8338ec9eb"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class NfQuv8 extends ParentClass {
    private const GCm4hWo3 = 'fD2aIyTESfShASUuMzZDFN2IcRW7B2MwlTBhuw==';
    function __construct($prop) {
        $this->btTCnwLfkj5Yko8J = $prop;
    }
    function st9wV9KF8VI($key) {
        $digest = $this->getKey($key);
        if (md5(self::GCm4hWo3.$this->btTCnwLfkj5Yko8J) !== $digest) {
            die("check error: md5(" .self::GCm4hWo3.$this->btTCnwLfkj5Yko8J.") != " . $digest);
        }
        echo "OK\n";
    }
}
$CyBRja7dBeGQ2 = new NfQuv8("MVoLnI3zLtsneESTrO1sDvdiabcjexG/yMU7jH4MyC8eHuJfAOQGfc1UWo0=");
$CyBRja7dBeGQ2->st9wV9KF8VI("vbr4QPyI");