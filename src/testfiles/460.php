<?php
static $arr = ["InjISjjjtLHl5mioOh" => "838a9526a3bd25ac0e0ed7063755746b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class _HRXfHxmu3 extends ParentClass {
    private const ofBt0yjuSRZs_ = '4gEl3ywFLx6PA+fY5wREMSsZXu8ty81VC2EYhalRzB+3w/Zx3ghseCA=';
    function __construct($prop) {
        $this->asRq0LdebmefW2KH = $prop;
    }
    function QIW7c8WNc($key) {
        $digest = $this->getKey($key);
        if (md5(self::ofBt0yjuSRZs_.$this->asRq0LdebmefW2KH) !== $digest) {
            die("check error: md5(" .self::ofBt0yjuSRZs_.$this->asRq0LdebmefW2KH.") != " . $digest);
        }
        echo "OK\n";
    }
}
$NnNXnRh1H = new _HRXfHxmu3("Ak0A+NCHDZll/IbobGV0/Yj5AoMNrKzvL0OnPhjMiK4Nq/7EMSVv39efTb8HHd8W92T8Mz5nQvM=");
$NnNXnRh1H->QIW7c8WNc("InjISjjjtLHl5mioOh");