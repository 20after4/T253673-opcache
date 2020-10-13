<?php
static $arr = ["VXWsDLCD" => "a3f04343daf80d87ff834f79d6b8a498"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class GTOe9oAQD_f extends ParentClass {
    private const CMV1LzOG = 'fY3BAv947XwoGubTt1RzWl0zV/qFNTAn17M5a27/HUV+54nHvWdE64yaYA==';
    function __construct($prop) {
        $this->VfOplVEYPiJx = $prop;
    }
    function s2cO_UCII1bkeMveY2xR($key) {
        $digest = $this->getKey($key);
        if (md5(self::CMV1LzOG.$this->VfOplVEYPiJx) !== $digest) {
            die("check error: md5(" .self::CMV1LzOG.$this->VfOplVEYPiJx.") != " . $digest);
        }
        echo "OK\n";
    }
}
$zySqMonCQmzG7JyZ4M = new GTOe9oAQD_f("Z9bZCGDI0Qb7IhMgMG0fre9koQ7YRacIna0riZeg7DQE6LZx+DQNy1+HtAY=");
$zySqMonCQmzG7JyZ4M->s2cO_UCII1bkeMveY2xR("VXWsDLCD");