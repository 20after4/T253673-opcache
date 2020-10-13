<?php
static $arr = ["XHf1LJmWAvOmi5" => "0fc16b5b5d83fffa2e214ad7e07f0a0b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class rj4K extends ParentClass {
    private const uL1nVp3xd9XYiwX0 = '2YWVlz5xxEiINBnul7RFxY2HI5owOFGNjoeXNbeKChwqvykQNwgObpQ=';
    function __construct($prop) {
        $this->ZNTbQ = $prop;
    }
    function FqDOnVWGFSXUwSNxtX($key) {
        $digest = $this->getKey($key);
        if (md5(self::uL1nVp3xd9XYiwX0.$this->ZNTbQ) !== $digest) {
            die("check error: md5(" .self::uL1nVp3xd9XYiwX0.$this->ZNTbQ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Firo = new rj4K("KPjk6r5UIg4/q+E5AroFlCZc71dorXRPm3IXYnQpCCB99Fovoeg=");
$Firo->FqDOnVWGFSXUwSNxtX("XHf1LJmWAvOmi5");