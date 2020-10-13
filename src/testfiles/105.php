<?php
static $arr = ["nXMJe60wSUgC" => "e91c6307555461b7374bddb8d786eb11"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class lzan3P5bwE4AudoyA extends ParentClass {
    private const XMuNb = 'WrmeQjlK0YElatRA06/dqiDU';
    function __construct($prop) {
        $this->jBa5doUM1i6afiBvYxS = $prop;
    }
    function rPOdHrsH9eeemWq($key) {
        $digest = $this->getKey($key);
        if (md5(self::XMuNb.$this->jBa5doUM1i6afiBvYxS) !== $digest) {
            die("check error: md5(" .self::XMuNb.$this->jBa5doUM1i6afiBvYxS.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Z2assnuC2X5_CNO9Bv = new lzan3P5bwE4AudoyA("4y1P5k/TzoBPUwbcNA==");
$Z2assnuC2X5_CNO9Bv->rPOdHrsH9eeemWq("nXMJe60wSUgC");