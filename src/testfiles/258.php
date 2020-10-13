<?php
static $arr = ["ge" => "c148e8478eac73a790b587f04719090f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class viIgdT3pMKp6f43b extends ParentClass {
    private const p = 'V/1ZTBaHuEIR3ST3pY8E2plc9gnSARRcUg==';
    function __construct($prop) {
        $this->tX2kkvI3X2NHR = $prop;
    }
    function pXy02v2TYIh3lS($key) {
        $digest = $this->getKey($key);
        if (md5(self::p.$this->tX2kkvI3X2NHR) !== $digest) {
            die("check error: md5(" .self::p.$this->tX2kkvI3X2NHR.") != " . $digest);
        }
        echo "OK\n";
    }
}
$i7kuaCAdZhEconxM = new viIgdT3pMKp6f43b("4ekcXHipcHdposg7x91B3ukdMcD5oRbKnwkNleoWcT1I3uaEYquZTwtVIR4zcmBbgS4InAQmJmf/vw+zH0/06BiRudK6jkbqtLjDlyn/XddQbB/X");
$i7kuaCAdZhEconxM->pXy02v2TYIh3lS("ge");