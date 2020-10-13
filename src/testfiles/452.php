<?php
static $arr = ["Q" => "cc4fcd16b8691e0249c85013490d43e5"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class erdzKB92TwzeMEdYdD extends ParentClass {
    private const UdLsCImIU7v = 'a7f7jkQDp8oG33wKGUiHAb93THRBZJxnxu/TmKjR3MfFNVm6CGhDJ8mlIQJvL0r7mgslGHjOjZlZtcAqTW7JzilCJYyNvwW7nROAosOTcQK6STlq7Zw=';
    function __construct($prop) {
        $this->ZT = $prop;
    }
    function hMc1cJCeleg2V1($key) {
        $digest = $this->getKey($key);
        if (md5(self::UdLsCImIU7v.$this->ZT) !== $digest) {
            die("check error: md5(" .self::UdLsCImIU7v.$this->ZT.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Sz9_vAobDMBybpgh = new erdzKB92TwzeMEdYdD("9f+oh3r4WJs0BlxudsiZn9AvreNEt4KrVeQxUbYmKavYSQz42UBwmdPL9U/B0cubfFMqx24EK6KNQLzEAZEKRmOqCHZtIcFsJ3xoUnLWrQX2NtE1YuPHeJcQqimbQDcI9Q==");
$Sz9_vAobDMBybpgh->hMc1cJCeleg2V1("Q");