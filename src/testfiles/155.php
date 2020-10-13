<?php
static $arr = ["ZWayZb8hp99y" => "e8473036486962099b48bddb95dacf2e"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class b7tkgIzaW_Kq extends ParentClass {
    private const AgLHDOA = 'zOSsUA8Doq2zF7+9ujUdTA2WaZhWmn+eSR6p1d066/AHiqOKJiDuKTGrE1DVHw==';
    function __construct($prop) {
        $this->VC6X17lb9Is739L = $prop;
    }
    function yBxNsFUA4LB7HDKI1XB($key) {
        $digest = $this->getKey($key);
        if (md5(self::AgLHDOA.$this->VC6X17lb9Is739L) !== $digest) {
            die("check error: md5(" .self::AgLHDOA.$this->VC6X17lb9Is739L.") != " . $digest);
        }
        echo "OK\n";
    }
}
$z1x6bK = new b7tkgIzaW_Kq("5uOOHBE50krNWyWWIWBLmTcowEHEqiFeW2QyVZBp3YuFTphJvzVlre2oGdePCvi/5DibCY00uZN+7aYX9/ary8NUMLH91fT/5DMV9MZmsztdDhkDjOgWB2z2NiAJSZGV");
$z1x6bK->yBxNsFUA4LB7HDKI1XB("ZWayZb8hp99y");