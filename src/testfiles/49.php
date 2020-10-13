<?php
static $arr = ["gOmEMKGVefx2" => "aa22ce0f48a62721835746816f65f674"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class iIT extends ParentClass {
    private const GT8 = 'TpETwZGbOSEFzXM4+yztos6lp4PtjrUeBGaXlwt4ce/fUI8B9CCLesozY1hTwpWJaOabj+JBGvOYnKKlIQ==';
    function __construct($prop) {
        $this->NZmGxt = $prop;
    }
    function G2OjcBl7Lwi($key) {
        $digest = $this->getKey($key);
        if (md5(self::GT8.$this->NZmGxt) !== $digest) {
            die("check error: md5(" .self::GT8.$this->NZmGxt.") != " . $digest);
        }
        echo "OK\n";
    }
}
$_ZiGUyiNkLPtr = new iIT("XoEEDlYHjht1x7gMJVeB9g==");
$_ZiGUyiNkLPtr->G2OjcBl7Lwi("gOmEMKGVefx2");