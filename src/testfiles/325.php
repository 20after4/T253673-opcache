<?php
static $arr = ["dILzNXIgPheOvV" => "cbcdd06ea312e5735ef0393d597c1fa8"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class GkTj3bbEH extends ParentClass {
    private const LDQYymrgJ = 'PFM4Ftg0ab85Xg==';
    function __construct($prop) {
        $this->f6WFxVgDMoJesJB9qN = $prop;
    }
    function V7Z4g($key) {
        $digest = $this->getKey($key);
        if (md5(self::LDQYymrgJ.$this->f6WFxVgDMoJesJB9qN) !== $digest) {
            die("check error: md5(" .self::LDQYymrgJ.$this->f6WFxVgDMoJesJB9qN.") != " . $digest);
        }
        echo "OK\n";
    }
}
$n = new GkTj3bbEH("NMNvNI7aQi7N5bVx/90uERa8Da9G03hDvCQ58V4pXrcdl8m0TJFGR5/o7Eu82G/4IDbI/lzthJG22+VLZQ+UbTuwoZ+fG5gfICm9KakSmWXBeycn01H49MbN0/dA+LI=");
$n->V7Z4g("dILzNXIgPheOvV");