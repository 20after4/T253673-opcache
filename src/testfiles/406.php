<?php
static $arr = ["YFg2DCDs6TjGmDN" => "c9494e21ce1811f322ac618ebfd171e3"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class uqVzFLv2py2CQ extends ParentClass {
    private const nNK_yn62uR9aCvSH_o2 = 'SGYchHYV3y27rfXWbtvhvRW8J7l6QrMpkElSruBYrFbzjYRnLtQ3CJn5Knfx+yalw5D8xsZWMaOf0K6NbGM0JA2dAtiK09EojEooEODIsjqhP+P+jtO+rqg68JheyWrI3Ik=';
    function __construct($prop) {
        $this->gcJNcr3T4Q = $prop;
    }
    function wTr9AOtM2BDrFeHX62W($key) {
        $digest = $this->getKey($key);
        if (md5(self::nNK_yn62uR9aCvSH_o2.$this->gcJNcr3T4Q) !== $digest) {
            die("check error: md5(" .self::nNK_yn62uR9aCvSH_o2.$this->gcJNcr3T4Q.") != " . $digest);
        }
        echo "OK\n";
    }
}
$s = new uqVzFLv2py2CQ("8TTtW1AuXkUUqYt91HsO99iYpvRBXnGGT2urvMMOL+MpiBk24MwCvPLrF+YPw93PTUjrtchLTk+I");
$s->wTr9AOtM2BDrFeHX62W("YFg2DCDs6TjGmDN");