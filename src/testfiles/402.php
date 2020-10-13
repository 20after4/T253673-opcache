<?php
static $arr = ["GfGvDw" => "11768273315a3109bd2b02a311f0f06d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class GiesjdCBrcNjhq extends ParentClass {
    private const UMVHdIlGMiIVikhX8a6 = 'l6zhZCJcZnQIw3JUYgbll4Rfp7n0rnPa4OQWXPwnG1/8RoJOYljtzdcVSZN/sLbQhwx5';
    function __construct($prop) {
        $this->AtO9lTR_ti492icqel = $prop;
    }
    function YjN0LnVVhbrL5IpULG3l($key) {
        $digest = $this->getKey($key);
        if (md5(self::UMVHdIlGMiIVikhX8a6.$this->AtO9lTR_ti492icqel) !== $digest) {
            die("check error: md5(" .self::UMVHdIlGMiIVikhX8a6.$this->AtO9lTR_ti492icqel.") != " . $digest);
        }
        echo "OK\n";
    }
}
$_IzDM8LeRp0Wht = new GiesjdCBrcNjhq("vPnUjC90Y9rYwXxyo8u2EiWxLiuQ7f+jL9KfbteeoAhE6DytotYxUeoTI0vPThbH+QtUG3Q0ww==");
$_IzDM8LeRp0Wht->YjN0LnVVhbrL5IpULG3l("GfGvDw");