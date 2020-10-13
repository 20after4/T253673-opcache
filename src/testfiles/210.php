<?php
static $arr = ["nUOIGoqYPG" => "ca165e3eb6917ee50900842302bef542"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class C_dtG0t0ONTPDYqd extends ParentClass {
    private const CfFMxsgNAK0EFF = 'yKvQRwdJ37oHd3WgjaWqB/DDh2aly2ZEyeKsxXfNVfcvB3kLZKY08xYCOkcR1Qi/itCTGmxy8L9ZkQhcAXRvvnNgC33WNdTl+d8b+R8=';
    function __construct($prop) {
        $this->YRyytSciMAdo = $prop;
    }
    function ozfNiFcDqolvVu0g5($key) {
        $digest = $this->getKey($key);
        if (md5(self::CfFMxsgNAK0EFF.$this->YRyytSciMAdo) !== $digest) {
            die("check error: md5(" .self::CfFMxsgNAK0EFF.$this->YRyytSciMAdo.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ByacdBtT7CK8S26zy = new C_dtG0t0ONTPDYqd("n36QmwH/rxiSS31dKChw4MbeuZpnin/oSf6gS25/8bQz7/p96TC3FKmJIa5t9HB18dPq9qb1bQZswWw2gjKM3WtlCEEPiadSKN8=");
$ByacdBtT7CK8S26zy->ozfNiFcDqolvVu0g5("nUOIGoqYPG");