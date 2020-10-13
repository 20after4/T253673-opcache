<?php
static $arr = ["LM32PvJx_dj" => "a9024765a44ca8fbbc00854a9e51ef7d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class s062HJH9va9A9o_j2Qy extends ParentClass {
    private const tsHuJq = 'LCXyUomuXsV97WWWsZW4Iw7QFxX1U0GfKfb+uKtUumxckj1oJe0B/MpvfqFh0y/B4oQgL9PsaW9++yIeHmSABRTvauw=';
    function __construct($prop) {
        $this->fz5HJor4yWe0iEZWPdvD = $prop;
    }
    function cpOFLgKw($key) {
        $digest = $this->getKey($key);
        if (md5(self::tsHuJq.$this->fz5HJor4yWe0iEZWPdvD) !== $digest) {
            die("check error: md5(" .self::tsHuJq.$this->fz5HJor4yWe0iEZWPdvD.") != " . $digest);
        }
        echo "OK\n";
    }
}
$rtomk = new s062HJH9va9A9o_j2Qy("2fqjg+ZFjiiaV+36urMWY3NCFJIJn0XOaHjEU0fb03iICWXg5Vlb5c4rfZCW8tZ36+/MhInZk11VrdUYb92jIxHXS4O1VxHq9bzJj7zmX5lXRHAj9gPtJp47Y61y6KA=");
$rtomk->cpOFLgKw("LM32PvJx_dj");