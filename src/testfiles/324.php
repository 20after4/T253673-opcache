<?php
static $arr = ["T8vMOQHsLxZDsc" => "97514f921ce8bcd8255767e1c7a9da16"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class CSBiBE7kLdj extends ParentClass {
    private const XctSPX0WId2FI2CgYU4 = 'dfyks5gqL7VDfEhtCXD5UhMQuJcfOCAeDWj/eOkSsXYVsO3eJKK/m18WtuDjNm82VVa/iSZ4UvLGjTVw96IuYiUuuDxl3idLvFcR0Cpz2KE=';
    function __construct($prop) {
        $this->c = $prop;
    }
    function jDHh5KvtClQm1($key) {
        $digest = $this->getKey($key);
        if (md5(self::XctSPX0WId2FI2CgYU4.$this->c) !== $digest) {
            die("check error: md5(" .self::XctSPX0WId2FI2CgYU4.$this->c.") != " . $digest);
        }
        echo "OK\n";
    }
}
$t02ju = new CSBiBE7kLdj("5w8yUR4ktCwwjNNFvGx3hB3h9GxcM1eOfPeFFQdevuAsm8oJDTpCpfYfyVVlNRPsFsCDSCiKEJBTt9oPVUVal2jPnM8Mzbhm9jGCpXaa");
$t02ju->jDHh5KvtClQm1("T8vMOQHsLxZDsc");