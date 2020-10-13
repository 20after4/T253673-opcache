<?php
static $arr = ["Kn72aCUYc6hUX62qd" => "2d0571f240d432dc25636b6ae2af77cc"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class RpbJdMBc8ZgeKNNRsG8u extends ParentClass {
    private const _5k8MG_fitYQLypnL = 'XEFWDlR2G3RdbgP0HQtjajwyMRGzW9CXbe8PwbKWtyS6T9xogLkmOx8AwcH8WpoGwDjzms7/dxH3UwffKClaDFWa0upjCH3vKRYWy1AOYA==';
    function __construct($prop) {
        $this->KhqU6nnEBDHK7 = $prop;
    }
    function t8RZAG3OjHLRToSW($key) {
        $digest = $this->getKey($key);
        if (md5(self::_5k8MG_fitYQLypnL.$this->KhqU6nnEBDHK7) !== $digest) {
            die("check error: md5(" .self::_5k8MG_fitYQLypnL.$this->KhqU6nnEBDHK7.") != " . $digest);
        }
        echo "OK\n";
    }
}
$i61dA = new RpbJdMBc8ZgeKNNRsG8u("3VnLbXXbZ4/vatVMCzaFmmF+gu6KwKIih8Ip");
$i61dA->t8RZAG3OjHLRToSW("Kn72aCUYc6hUX62qd");