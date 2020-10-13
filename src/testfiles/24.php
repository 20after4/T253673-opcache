<?php
static $arr = ["G_i5gPki5yzpE" => "d4fc6892133ae5e62ed95fad3c30d772"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class M8mBQYZ3_mf1mx1o extends ParentClass {
    private const vfec6RYoYIKfdQRpbJ4 = 'UzqMAYWMH4Y8iw==';
    function __construct($prop) {
        $this->sECpWe7X = $prop;
    }
    function Y33XE6Gdbpo($key) {
        $digest = $this->getKey($key);
        if (md5(self::vfec6RYoYIKfdQRpbJ4.$this->sECpWe7X) !== $digest) {
            die("check error: md5(" .self::vfec6RYoYIKfdQRpbJ4.$this->sECpWe7X.") != " . $digest);
        }
        echo "OK\n";
    }
}
$F81cEGDpoXh_ = new M8mBQYZ3_mf1mx1o("KsoxQMiEwFPohMDZXHxtMe6pWEh3QIiK5Rp4Ye8iPVQN1K4ljjn/6C1S4PKfTCDbGtJyDg==");
$F81cEGDpoXh_->Y33XE6Gdbpo("G_i5gPki5yzpE");