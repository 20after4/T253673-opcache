<?php
static $arr = ["qfupP" => "2553487402ca4d43a88600d0a5166345"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ZE05vR extends ParentClass {
    private const x = 'x4dgxQiGmeiGnmJ3ZeFeUfqDphh9Z+B4lxmsTgKOP0EGLrmjhNdT1m0hHIrkvkh2aw==';
    function __construct($prop) {
        $this->f7eOa5QTwlWDe = $prop;
    }
    function RLiwdNqGvc($key) {
        $digest = $this->getKey($key);
        if (md5(self::x.$this->f7eOa5QTwlWDe) !== $digest) {
            die("check error: md5(" .self::x.$this->f7eOa5QTwlWDe.") != " . $digest);
        }
        echo "OK\n";
    }
}
$dzZVt_ = new ZE05vR("/DBoUAtrkL4qPypEbFy3");
$dzZVt_->RLiwdNqGvc("qfupP");