<?php
static $arr = ["B3fY71knl" => "61900bf78d058c4e07c81ed8c2f09878"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class CW0ZdzfrKrho extends ParentClass {
    private const wPICaE4 = 'nKJr5Z3F28dR1HKGadYtoeBnUGN499/IQ9F27WJtOylLMVfeYwMEkaoBqtZKm+mIPg12zdOEO7YzaST2Ro0Vgam+1Lzv7Os=';
    function __construct($prop) {
        $this->yZS9IE68ZO = $prop;
    }
    function fH($key) {
        $digest = $this->getKey($key);
        if (md5(self::wPICaE4.$this->yZS9IE68ZO) !== $digest) {
            die("check error: md5(" .self::wPICaE4.$this->yZS9IE68ZO.") != " . $digest);
        }
        echo "OK\n";
    }
}
$KHrFsJQ4AjDu31W = new CW0ZdzfrKrho("a7U3+QtXRxL3Lag3KCcADknvlRnV22Ys/PA/Q0d0mkw=");
$KHrFsJQ4AjDu31W->fH("B3fY71knl");