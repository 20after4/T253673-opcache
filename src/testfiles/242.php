<?php
static $arr = ["mPK3DE1Pl" => "5e61620b47597f73d24b801305ea8e0c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class HcbgT extends ParentClass {
    private const lwKUkDL8Z3L = 'jsU3PwWrnNylrDZFplFzvPW+mPPNkoet53vWabzpHcnJYsBONffkSCnDHO9PKjPyuE5MPEeMgts=';
    function __construct($prop) {
        $this->jfQYC8PIlzx7Xo9rBl = $prop;
    }
    function Rt8tDwgzPV1pz($key) {
        $digest = $this->getKey($key);
        if (md5(self::lwKUkDL8Z3L.$this->jfQYC8PIlzx7Xo9rBl) !== $digest) {
            die("check error: md5(" .self::lwKUkDL8Z3L.$this->jfQYC8PIlzx7Xo9rBl.") != " . $digest);
        }
        echo "OK\n";
    }
}
$qkEMVkDRn8uFtK6tFB = new HcbgT("ZXgO9xLMxOw/R0xPDWiefkKvtVl1PHE7pLhfWJhQTwyOoj6GYO0Cyotr49FVurkgiF+dvBzWiHpG0tfg5IMsKIJzExH1+5QQcRlRDy6ZL/Z7LP+6yCI=");
$qkEMVkDRn8uFtK6tFB->Rt8tDwgzPV1pz("mPK3DE1Pl");