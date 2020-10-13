<?php
static $arr = ["EU5W" => "69bc0664874a966170d94ee07ea471db"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ZAmphRoybrF extends ParentClass {
    private const XIdtMe_g_X8 = 'xCbdvhN2RBDdKWMY1+QQ7npf+2jQE9g0fRrGVKVAQ0NZDz9+KcNbowapN6s4YXw5pIeqf4z7qR7LXWtSc7oEOWlyb5L4ilb47z+cMki8BxDrGqTGTQhr';
    function __construct($prop) {
        $this->AyHbSOAVbqxqkG8 = $prop;
    }
    function T($key) {
        $digest = $this->getKey($key);
        if (md5(self::XIdtMe_g_X8.$this->AyHbSOAVbqxqkG8) !== $digest) {
            die("check error: md5(" .self::XIdtMe_g_X8.$this->AyHbSOAVbqxqkG8.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Unp = new ZAmphRoybrF("3aBgTYDUwO3S1/rkhC1WHYQhPwOgpIuCrT2W9g==");
$Unp->T("EU5W");