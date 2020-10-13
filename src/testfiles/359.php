<?php
static $arr = ["ZLPjR1iL" => "a4c5c3cc29ddbb10d6ef9f78d5773adf"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Yh extends ParentClass {
    private const yUzyyC6_k4i_pg1 = 'WgYjWeQGQGvbWNTz5SohJUI0QloDlwwM97yr6CTkk18YScY+5KPQn5ca';
    function __construct($prop) {
        $this->JOZRrV = $prop;
    }
    function WJ($key) {
        $digest = $this->getKey($key);
        if (md5(self::yUzyyC6_k4i_pg1.$this->JOZRrV) !== $digest) {
            die("check error: md5(" .self::yUzyyC6_k4i_pg1.$this->JOZRrV.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Th = new Yh("VyRQwagUdzS8v36n0xKUkjkmbKLJ2zSYlTC0dVpvGTL9y/ah2Jla0D1kXeCndXQDCuJG5seUHW4FJl6P4xfizN5i");
$Th->WJ("ZLPjR1iL");