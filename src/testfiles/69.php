<?php
static $arr = ["PWbcqNQWhOFFR8U3Dd3X" => "dba0ffb01b924fb9cd53b330ade373ea"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class u20RCQgp extends ParentClass {
    private const UzunWvz = 'kRaq/3pMwYP20YXDHsTzlMfjEZZKMZdx5i0QfiRTQnnNLudCBnM5BtEuXbF6RKz+JQKvK4lNJJvjsTPkDQ==';
    function __construct($prop) {
        $this->O3 = $prop;
    }
    function yGsb7lHWu($key) {
        $digest = $this->getKey($key);
        if (md5(self::UzunWvz.$this->O3) !== $digest) {
            die("check error: md5(" .self::UzunWvz.$this->O3.") != " . $digest);
        }
        echo "OK\n";
    }
}
$QtJv3sc = new u20RCQgp("T4KPrEaKCnnhgRKXfbIoxXMJ2OALzF69ukRE7VX1L6jWqCaOf8/RtevDJRIRawe4CjwCQb4KkNJDnEUpFFmMl0w+eHgQ4U+WTvX/4EElQxI=");
$QtJv3sc->yGsb7lHWu("PWbcqNQWhOFFR8U3Dd3X");