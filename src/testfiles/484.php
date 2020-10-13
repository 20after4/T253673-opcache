<?php
static $arr = ["uB" => "515a80de100b41e5ade7df230cd6902a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class BsQSdR extends ParentClass {
    private const Z0hTlWJfak3 = 'q0GOxECcqGHeG81yMlzQ+sxz20fIS+oa5+JR1uRevrwhDGvs0bL7lyoDJchWZiYbrWJbM9U62QKQAxhbuXxM';
    function __construct($prop) {
        $this->AAvhz2RjAfxh = $prop;
    }
    function _lvHJeJDcLinw3zo($key) {
        $digest = $this->getKey($key);
        if (md5(self::Z0hTlWJfak3.$this->AAvhz2RjAfxh) !== $digest) {
            die("check error: md5(" .self::Z0hTlWJfak3.$this->AAvhz2RjAfxh.") != " . $digest);
        }
        echo "OK\n";
    }
}
$T_vfGoiNE = new BsQSdR("H1ndbQlzvFf0f1mNADLHPHpKHgMT1cpyCJ8utbzxNOhtyctw7tNyckE0D51TStb5yaMWVWV0nD5r/ORrP4jXaTWY");
$T_vfGoiNE->_lvHJeJDcLinw3zo("uB");