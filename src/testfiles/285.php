<?php
static $arr = ["azmAaKllu" => "a8800007997723e041e5d7d881fcffe9"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class HX extends ParentClass {
    private const tFIWyoLa_L = 'jBTGxLG/EXl42r5srJeXO82EN6+O6IjJ/cOc1kfU1WaqQHFDImlY/aEEC5H+mvLhm8bDcq4b8BzYXMHYTjPP1Zbasphcywo7CXBRFWI=';
    function __construct($prop) {
        $this->GxfH4FUFGkeutbaA9Vn = $prop;
    }
    function TM_D656($key) {
        $digest = $this->getKey($key);
        if (md5(self::tFIWyoLa_L.$this->GxfH4FUFGkeutbaA9Vn) !== $digest) {
            die("check error: md5(" .self::tFIWyoLa_L.$this->GxfH4FUFGkeutbaA9Vn.") != " . $digest);
        }
        echo "OK\n";
    }
}
$zfbec64nBNT = new HX("/Yb/zocAFShI0jxkDhIkL2U0FpEtmQ5g8afq4m0uChM=");
$zfbec64nBNT->TM_D656("azmAaKllu");