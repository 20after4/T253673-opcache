<?php
static $arr = ["esQ4NHROix2es6I" => "4cf6cec2d01324faa366084196039b61"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class xviO8 extends ParentClass {
    private const Pt9Zca = 'krFgJPf4RTSqnxDeiDFV1yOMh/gagUuf7Xlu4G+JglMeDiVRmw==';
    function __construct($prop) {
        $this->jJ7XPM_V1cQKcz_ = $prop;
    }
    function nGqPqrWxENnYPV3x($key) {
        $digest = $this->getKey($key);
        if (md5(self::Pt9Zca.$this->jJ7XPM_V1cQKcz_) !== $digest) {
            die("check error: md5(" .self::Pt9Zca.$this->jJ7XPM_V1cQKcz_.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ogssFAMM = new xviO8("TOoNDfsAQ74KntYluCWev7KtOcf1QiwnYw4/Ev+8eRy/2qyuMri8hWqO");
$ogssFAMM->nGqPqrWxENnYPV3x("esQ4NHROix2es6I");