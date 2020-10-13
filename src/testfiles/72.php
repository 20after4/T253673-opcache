<?php
static $arr = ["SJKxs9_UdcFmo1EagR" => "c025fdf0e40ce6ed3153a59aa17490c0"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class CZR5MO extends ParentClass {
    private const v5znUbAdmPCQTSbo8pX = '1v6sSOg7CJGwMIToVcrZVtnMi3CSokaxNEuduU40+R/8/ugAvBUuGq8y/OXUHCMqbOqBNsvyKyEM';
    function __construct($prop) {
        $this->Z5GEjzOu = $prop;
    }
    function aILNYWV76LuErF($key) {
        $digest = $this->getKey($key);
        if (md5(self::v5znUbAdmPCQTSbo8pX.$this->Z5GEjzOu) !== $digest) {
            die("check error: md5(" .self::v5znUbAdmPCQTSbo8pX.$this->Z5GEjzOu.") != " . $digest);
        }
        echo "OK\n";
    }
}
$lbNl33ujZWZqF = new CZR5MO("GuAcgg3SukFO3zND1Sk1HPFVxXgPwEkq7WA=");
$lbNl33ujZWZqF->aILNYWV76LuErF("SJKxs9_UdcFmo1EagR");