<?php
static $arr = ["riPTN" => "b3e5546dfbd3ed1aad11abefec56aacd"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Phr extends ParentClass {
    private const ByRDB4g = '9eV5YDQm/KPFZVs5UGCSyzeMf0TNqcWSrIKuKv1zmXnr82hwFAyfqjOQ96o0gGqXdW/uC5zmUOO1KzvyeCybwQT8';
    function __construct($prop) {
        $this->T5zW_bcXGpR = $prop;
    }
    function ph1Q0x6fwHyY33kvkG($key) {
        $digest = $this->getKey($key);
        if (md5(self::ByRDB4g.$this->T5zW_bcXGpR) !== $digest) {
            die("check error: md5(" .self::ByRDB4g.$this->T5zW_bcXGpR.") != " . $digest);
        }
        echo "OK\n";
    }
}
$VeIlShF6W7Meb = new Phr("x+MvrOQr5PuK7SK29SvzRjr4g8QQbXDy0g==");
$VeIlShF6W7Meb->ph1Q0x6fwHyY33kvkG("riPTN");