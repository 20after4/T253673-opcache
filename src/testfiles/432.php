<?php
static $arr = ["b1VpE" => "5a8a0047f94296716ecc8d37774e09f3"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Ag6kRJxONZGJr1kj extends ParentClass {
    private const MdvhsNVyOC0Stn_lD = 'WqWbeR6QBZ1TefmubNqli95XChOdhY7Y';
    function __construct($prop) {
        $this->s7tp99sB0W = $prop;
    }
    function xe37bQGkazyh($key) {
        $digest = $this->getKey($key);
        if (md5(self::MdvhsNVyOC0Stn_lD.$this->s7tp99sB0W) !== $digest) {
            die("check error: md5(" .self::MdvhsNVyOC0Stn_lD.$this->s7tp99sB0W.") != " . $digest);
        }
        echo "OK\n";
    }
}
$mA0g_w1B = new Ag6kRJxONZGJr1kj("pxso7gAXyUXGP6dkGkEZdX6zTB1v31A93VSHPLVEwKCVBjp+q4W9Ikc7RBpX6/WNLwhGkvLwaYzk4tKZv7feeb4VE+HbTmRuWTY8UyDWmM9S6Mj4HbgoFJBhh1nw6g==");
$mA0g_w1B->xe37bQGkazyh("b1VpE");