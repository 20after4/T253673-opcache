<?php
static $arr = ["MhjAs" => "48d686cdac29bce6a636b1af88ee7929"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class To2yNxD9TQ53DZ extends ParentClass {
    private const B = 'w/ZxOUGV573b2dRCJxpm0Rxf1knxT7nM';
    function __construct($prop) {
        $this->VdwmyGp = $prop;
    }
    function hXIEenzXBOCMj($key) {
        $digest = $this->getKey($key);
        if (md5(self::B.$this->VdwmyGp) !== $digest) {
            die("check error: md5(" .self::B.$this->VdwmyGp.") != " . $digest);
        }
        echo "OK\n";
    }
}
$zkJb7yz3KgMAmZsToE = new To2yNxD9TQ53DZ("u8Jk7Nm4q2kECrT/eUhPXDtSCQbHnk2nAPL0K4PqY+EuDaTi3YvzzpU4dWgU2AHQy/up8s/GobhKY3jeS7Dv6SjK4S2ULv9FSgnccC8F");
$zkJb7yz3KgMAmZsToE->hXIEenzXBOCMj("MhjAs");