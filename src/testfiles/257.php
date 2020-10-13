<?php
static $arr = ["K" => "7c66100acd72e2f40cb5bd775e992b62"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class L8K9z6aDIWko extends ParentClass {
    private const OgACjEtu49V = 'LjL92bR/snKwMkcvXeOJImHFpnsafJAExmwfp+O0S6uTkPXDnXpUNq8b9LUeYgvjdgqSP8IEZd9tD2IoHofooDBcxke4voJqJlKE8/7qjbchSdIs+0cLP1Nc1Q==';
    function __construct($prop) {
        $this->Y = $prop;
    }
    function _h2bZxgC2($key) {
        $digest = $this->getKey($key);
        if (md5(self::OgACjEtu49V.$this->Y) !== $digest) {
            die("check error: md5(" .self::OgACjEtu49V.$this->Y.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ZR9ZabUNq7xxRCQCSFZ = new L8K9z6aDIWko("CB1LaRmKL4KQvQ==");
$ZR9ZabUNq7xxRCQCSFZ->_h2bZxgC2("K");