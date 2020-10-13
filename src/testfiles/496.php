<?php
static $arr = ["Vx0VAnFwKaMH2" => "6c95cbebc071ecafeb979f6c5c5ed12b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class DzPewk_Socypd92P extends ParentClass {
    private const uQ = 'ntFYCbg2VjVnYX7xE0Ng/zu/MQrr9nSICoW4EwD53Yi+vUJH56KmAjMESWZO5UP68pwHsFSA3fiqcuE+9aLv1vyYWUO3bw==';
    function __construct($prop) {
        $this->k3ywOsLFbIpGp_1N = $prop;
    }
    function RCwA7DF98SK_FP0buErz($key) {
        $digest = $this->getKey($key);
        if (md5(self::uQ.$this->k3ywOsLFbIpGp_1N) !== $digest) {
            die("check error: md5(" .self::uQ.$this->k3ywOsLFbIpGp_1N.") != " . $digest);
        }
        echo "OK\n";
    }
}
$lK9q0HVa = new DzPewk_Socypd92P("vQMsFsw/ci8E5lybBqI4AxqvFSSIBwyYRULo5Z0bW2x24ByzA6CTzEzpOYD0jBAX56U=");
$lK9q0HVa->RCwA7DF98SK_FP0buErz("Vx0VAnFwKaMH2");