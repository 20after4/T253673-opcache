<?php
static $arr = ["CBCWCs81h9Fmm" => "16cafc2f071171496897afab1bce9c12"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class xuWbSf710hL extends ParentClass {
    private const dhljYWH8Pk7mpbD = 'mEkvRFCiv8NGqPi0/R6kLU6uxV0LH6UnIImIaFOwT5JUJaEAfcGBQh1q/g==';
    function __construct($prop) {
        $this->H2m3 = $prop;
    }
    function BCAemSh($key) {
        $digest = $this->getKey($key);
        if (md5(self::dhljYWH8Pk7mpbD.$this->H2m3) !== $digest) {
            die("check error: md5(" .self::dhljYWH8Pk7mpbD.$this->H2m3.") != " . $digest);
        }
        echo "OK\n";
    }
}
$BsbxOYEGL7Bt = new xuWbSf710hL("xI60SX4SZyHdIzZB2rbu7Sz3DA3t8HzXKnYrQIFdPftJuVvJJgiBCfOcS4tmTvuIOzqxF+5TtKD6IL1USg8EXcRDSey4xdbiHS2LYaGh3xoWTG2b1/iv");
$BsbxOYEGL7Bt->BCAemSh("CBCWCs81h9Fmm");