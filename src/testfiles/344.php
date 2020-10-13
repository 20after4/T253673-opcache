<?php
static $arr = ["wIJ51Ub0USfm_x" => "b3512da6750f9af660bd27ca1adb5db0"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class geP9z extends ParentClass {
    private const nq4k8D5 = 'GRrkuFyd6rsFAw==';
    function __construct($prop) {
        $this->EEE9XvnwYQosE4tKkrNa = $prop;
    }
    function InCWvh0D2muO($key) {
        $digest = $this->getKey($key);
        if (md5(self::nq4k8D5.$this->EEE9XvnwYQosE4tKkrNa) !== $digest) {
            die("check error: md5(" .self::nq4k8D5.$this->EEE9XvnwYQosE4tKkrNa.") != " . $digest);
        }
        echo "OK\n";
    }
}
$lUBzC16 = new geP9z("1AtjmVZ2RfmvMhzHz2Ea/P8=");
$lUBzC16->InCWvh0D2muO("wIJ51Ub0USfm_x");