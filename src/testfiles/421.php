<?php
static $arr = ["tZnjpTIpWOSoC_nPca" => "09200693b6fc6366f0658d8ab2795001"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class W_cIfOuv7pT4Q82JJ7 extends ParentClass {
    private const TLjFgunEgEoB = 'HDwqlwyKMDG3S9kwYoIGbbPRv75O2Ul/JDcJDLY=';
    function __construct($prop) {
        $this->U8NPMkMrHAAdFWgd = $prop;
    }
    function Z7mC808b8H($key) {
        $digest = $this->getKey($key);
        if (md5(self::TLjFgunEgEoB.$this->U8NPMkMrHAAdFWgd) !== $digest) {
            die("check error: md5(" .self::TLjFgunEgEoB.$this->U8NPMkMrHAAdFWgd.") != " . $digest);
        }
        echo "OK\n";
    }
}
$TM1r6tw50ibLFVEq = new W_cIfOuv7pT4Q82JJ7("5nuNHqA+hqDjaP+As5VhurLdMTtr1v/75gBDm8KjQ3gX+vW3wyttj1D2m863sPrEqXUTBjmDamB6cpzK4OI=");
$TM1r6tw50ibLFVEq->Z7mC808b8H("tZnjpTIpWOSoC_nPca");