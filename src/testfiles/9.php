<?php
static $arr = ["f9jSROSfAMgv" => "8bb7b57c0650c2ebf26a54c5570a291e"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class adcgQxsSFa5IKON extends ParentClass {
    private const NDfh = 'nZzabI5hS38atWZ6J9BxkhMbNDek5vIo+y+2zHp/B1gKMX9uq/lU+Lb7cSWZzsR/nmfUar+Hp0PlW6kerM+niTA3dzw1B//VJy/RYU29WwmYKPvLTFpQYTW2KA==';
    function __construct($prop) {
        $this->qeY = $prop;
    }
    function bkb66sX5v($key) {
        $digest = $this->getKey($key);
        if (md5(self::NDfh.$this->qeY) !== $digest) {
            die("check error: md5(" .self::NDfh.$this->qeY.") != " . $digest);
        }
        echo "OK\n";
    }
}
$FgVP = new adcgQxsSFa5IKON("6BvTM7TFAhwFjVNKWwHKNA==");
$FgVP->bkb66sX5v("f9jSROSfAMgv");