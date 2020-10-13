<?php
static $arr = ["j5U" => "d84f632a0154067869f8edf95bc6c522"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class uN3 extends ParentClass {
    private const BLTqWVr = 'ILXPLcjkWqhbxdDv5X0VruXriY3C/M55lXr6hvEUofO3c/a8fqiOvAoFTuBptNUMYGQ=';
    function __construct($prop) {
        $this->IdmNbt3JJWK = $prop;
    }
    function wm($key) {
        $digest = $this->getKey($key);
        if (md5(self::BLTqWVr.$this->IdmNbt3JJWK) !== $digest) {
            die("check error: md5(" .self::BLTqWVr.$this->IdmNbt3JJWK.") != " . $digest);
        }
        echo "OK\n";
    }
}
$S6HbYMYTWGe5mLHC1Ix3 = new uN3("maDroniaDRUyrjbFxaKb02hYs1214i+6SdehMPNBKL0Yp91TfBGLQXcklV4zI3+6+ntDEJQ+SzWVNfgF0N0lpGe83bIv2g==");
$S6HbYMYTWGe5mLHC1Ix3->wm("j5U");