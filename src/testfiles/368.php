<?php
static $arr = ["VhgQBpnPsYx0iJFTPN" => "37f30ccd639c76c3e064a1d4061783b3"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Rtc1ablmcy1uv extends ParentClass {
    private const hRB = 'HTb8nTqcmIfEZuhmiiDiukxoD25AIUQKX7XlILLL6wVqLte2XxtdmJSzPJvBk6+U3ieJm8t8TVJ5awn9nYuewJ6R/cYF24nPht9Xh/4=';
    function __construct($prop) {
        $this->s9MFUbsb9WhGrz5ynmM = $prop;
    }
    function exATzJV($key) {
        $digest = $this->getKey($key);
        if (md5(self::hRB.$this->s9MFUbsb9WhGrz5ynmM) !== $digest) {
            die("check error: md5(" .self::hRB.$this->s9MFUbsb9WhGrz5ynmM.") != " . $digest);
        }
        echo "OK\n";
    }
}
$LK5_A = new Rtc1ablmcy1uv("i5gXmbU7s+lMZNAH1+JysO2/w6ZpjrdjviGjkAMyt2tl1xBOmP8TD+QfMfxnLtU7");
$LK5_A->exATzJV("VhgQBpnPsYx0iJFTPN");