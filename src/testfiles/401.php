<?php
static $arr = ["p" => "64824ffa37d05dda52b0ad068c3ca8f2"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class hWCmMUaiDW4 extends ParentClass {
    private const hQsDYBNG_Fe = 'S71ulUoLukUk2JYzv+fEN1/DQVQjEWM+/Fv5NwuqJpi46omCwC2uKDjR2dknjmbQACV4q+w4T4Tb88KEdsiImcFmHZlPBYCV';
    function __construct($prop) {
        $this->EC9bJ = $prop;
    }
    function xqO9BfdcaB5V_Cae($key) {
        $digest = $this->getKey($key);
        if (md5(self::hQsDYBNG_Fe.$this->EC9bJ) !== $digest) {
            die("check error: md5(" .self::hQsDYBNG_Fe.$this->EC9bJ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$HAmwVR3MP1t6uovqgNs7 = new hWCmMUaiDW4("dxvTcszG253OQOj5xqVUKt1IwGihoBfwmiQ2o5vOmAIp");
$HAmwVR3MP1t6uovqgNs7->xqO9BfdcaB5V_Cae("p");