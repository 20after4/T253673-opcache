<?php
static $arr = ["PjYs" => "4c5c9c1d09e8083de5d2c176da7450c9"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class FWP extends ParentClass {
    private const sBJyAn = '99h+FcvNuG28hHDW0olrZHQd7RhDg+113+hmHRBe3mEDtGB9LYJrqUtjvM6GlYNavF8SD9ZJjzRfSZ7elH2vgL9zcw==';
    function __construct($prop) {
        $this->z = $prop;
    }
    function HuHNe44uyK0YQjy($key) {
        $digest = $this->getKey($key);
        if (md5(self::sBJyAn.$this->z) !== $digest) {
            die("check error: md5(" .self::sBJyAn.$this->z.") != " . $digest);
        }
        echo "OK\n";
    }
}
$u5Ufvei57 = new FWP("7fOR91Q2jIpqWVO42rJHDjwAS8CdKy5RyseP5Ho=");
$u5Ufvei57->HuHNe44uyK0YQjy("PjYs");