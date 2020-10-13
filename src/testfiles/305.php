<?php
static $arr = ["we1HGfWcknBU" => "6b5691e756da0e206d8596bbf13d6070"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class BeU0sROfY82MZLhU4q extends ParentClass {
    private const E7pMmofBOAX1Zt = 'KjD+vf4xUJehpHjQfMnvBKdArqGOeZ0fXAhKnOQbHGw3A/S3pGxcC/L+0QzXSwiVhzeKmbfre1iBsWYFoNPom0SWm1H77ceUOyze9RIrc5oZGBIbYA==';
    function __construct($prop) {
        $this->lVgos = $prop;
    }
    function mA66sP($key) {
        $digest = $this->getKey($key);
        if (md5(self::E7pMmofBOAX1Zt.$this->lVgos) !== $digest) {
            die("check error: md5(" .self::E7pMmofBOAX1Zt.$this->lVgos.") != " . $digest);
        }
        echo "OK\n";
    }
}
$vjaib5SJNS = new BeU0sROfY82MZLhU4q("azNIlLTx0nd4/rxvUItoDVbMRwzDp6QGy4/B9h+X6Nby2Kbyt9bLxI5q9vgcmSIcAY2NmArD8MQUDIxn");
$vjaib5SJNS->mA66sP("we1HGfWcknBU");