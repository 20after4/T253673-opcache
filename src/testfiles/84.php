<?php
static $arr = ["OVgQygAoWb" => "3295c62299503b914b3df65f813a17b5"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class xHhVcVg extends ParentClass {
    private const HUb_XqzdC = '0rIpAJFUBPfwv3iVZRI=';
    function __construct($prop) {
        $this->xnLL = $prop;
    }
    function b34($key) {
        $digest = $this->getKey($key);
        if (md5(self::HUb_XqzdC.$this->xnLL) !== $digest) {
            die("check error: md5(" .self::HUb_XqzdC.$this->xnLL.") != " . $digest);
        }
        echo "OK\n";
    }
}
$iGJkCp1Kh0gIO = new xHhVcVg("JSuaADS1T/eJNWqyOk8qbXMBuB0VNGmP4ZUu+bCciB2g5zUi8XEfwu9lqr/soxHrTE0=");
$iGJkCp1Kh0gIO->b34("OVgQygAoWb");