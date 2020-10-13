<?php
static $arr = ["WBhX2bvY9Kwte72LqKTJ" => "21c56102157c2bbbc96ca084dc1919b2"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class j0LXnAnKF extends ParentClass {
    private const oPXFgCU3 = '9fRgfjJUV5UxN+w5dJ8qHDK4C3WvMm0Jp8w20PYt68uN74udYw3t2M5QIpFbYuLY9OZzZtGA10ho6aE=';
    function __construct($prop) {
        $this->a0oZX_jg8tz11bLWLmF1 = $prop;
    }
    function r59FSK76WbQ2JJS($key) {
        $digest = $this->getKey($key);
        if (md5(self::oPXFgCU3.$this->a0oZX_jg8tz11bLWLmF1) !== $digest) {
            die("check error: md5(" .self::oPXFgCU3.$this->a0oZX_jg8tz11bLWLmF1.") != " . $digest);
        }
        echo "OK\n";
    }
}
$dDrFjZIr_IvAm = new j0LXnAnKF("/IfFmBDDyzEXabYuv67jVpvDLDiIATAEtlgb1uw=");
$dDrFjZIr_IvAm->r59FSK76WbQ2JJS("WBhX2bvY9Kwte72LqKTJ");