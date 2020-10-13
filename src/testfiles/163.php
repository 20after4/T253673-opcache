<?php
static $arr = ["ascIasicGsw4" => "67eb57a5fa50f1e38b42d5b63a1d901c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class cyP84XA4GIGSU extends ParentClass {
    private const mLZj5QXBZ = 'B6YCEwbrefupitmOMAxlNSYrlcJpJ4abqWwTJJPh7RtFZf8GWEjK4873jKF424lQZDibJLE49Rtyhku5TihgPU1yKk+45bg9BCbZo3KeaWoXVD/SeVeljA==';
    function __construct($prop) {
        $this->MY6dPEW2ym = $prop;
    }
    function XHUbEo6FtnHB5Fl7pKUX($key) {
        $digest = $this->getKey($key);
        if (md5(self::mLZj5QXBZ.$this->MY6dPEW2ym) !== $digest) {
            die("check error: md5(" .self::mLZj5QXBZ.$this->MY6dPEW2ym.") != " . $digest);
        }
        echo "OK\n";
    }
}
$O8BSUtg8i0i8 = new cyP84XA4GIGSU("lN2jS+S2vi+wVEvCxoH6r5nCf0GbT2vXvu8Zfb2W");
$O8BSUtg8i0i8->XHUbEo6FtnHB5Fl7pKUX("ascIasicGsw4");