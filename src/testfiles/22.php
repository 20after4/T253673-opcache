<?php
static $arr = ["dmXqTVakzXzwNncsoEd" => "59decaa8efe9d727e0e1934c4c6bb78c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class W1tlFd3LfpZ extends ParentClass {
    private const lp = 'altMKVadRVF/v2LgiS4r9Q==';
    function __construct($prop) {
        $this->_Mlp = $prop;
    }
    function kptYmPvX8g61w5x2xO($key) {
        $digest = $this->getKey($key);
        if (md5(self::lp.$this->_Mlp) !== $digest) {
            die("check error: md5(" .self::lp.$this->_Mlp.") != " . $digest);
        }
        echo "OK\n";
    }
}
$jCM5NoUsjGEVV = new W1tlFd3LfpZ("W1KZktJcIQSr5Is2kg==");
$jCM5NoUsjGEVV->kptYmPvX8g61w5x2xO("dmXqTVakzXzwNncsoEd");