<?php
static $arr = ["rnyXXOXylSrPmAxidqE" => "88a5a581ca934ec075e99e315ac956e6"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class yIVsVvD7 extends ParentClass {
    private const Std5rj = 'VYQxsulPJjWa5EOvDzl5BN+8TP3267RvNH0Tj8ZgMZE=';
    function __construct($prop) {
        $this->AT1djNzQ = $prop;
    }
    function HHdtN6onobqFX9V($key) {
        $digest = $this->getKey($key);
        if (md5(self::Std5rj.$this->AT1djNzQ) !== $digest) {
            die("check error: md5(" .self::Std5rj.$this->AT1djNzQ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Lhmy = new yIVsVvD7("+pWYEgAbJD7p2iZ5Us0dEEzf/Mna93tjNw==");
$Lhmy->HHdtN6onobqFX9V("rnyXXOXylSrPmAxidqE");