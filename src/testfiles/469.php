<?php
static $arr = ["LA2Xs1a3E0Rai6bwZc" => "c81c4de010916b66b1edcbba7b08e4d7"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class fW7lc46u extends ParentClass {
    private const Rc7jRy7aSM = 'VfsBJFVTKoAapFoZ+7/iGMbujF2tPfVAYjHOGWDX2qHNwMmf3BeoCpWw9bk=';
    function __construct($prop) {
        $this->FvK_4 = $prop;
    }
    function jE3_x7jt2R9jWnd2BZ($key) {
        $digest = $this->getKey($key);
        if (md5(self::Rc7jRy7aSM.$this->FvK_4) !== $digest) {
            die("check error: md5(" .self::Rc7jRy7aSM.$this->FvK_4.") != " . $digest);
        }
        echo "OK\n";
    }
}
$xNdUjEDhSNEJOzwmg = new fW7lc46u("ktp9oLD5b0rbm+vxqHErDILuEQrRdhKUIiQJpM6fj5ee4Qj9psIwl3nTJMsQxCSf");
$xNdUjEDhSNEJOzwmg->jE3_x7jt2R9jWnd2BZ("LA2Xs1a3E0Rai6bwZc");