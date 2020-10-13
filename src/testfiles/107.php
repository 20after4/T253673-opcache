<?php
static $arr = ["H0sK" => "84f76e86c2bdaae9799d559cf7f5ab6f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ZOk_AeFnhE extends ParentClass {
    private const ucpFdfOp = 'j3l+YIM+V6kh6yaE';
    function __construct($prop) {
        $this->NEWMfkFn377SN0pvImi = $prop;
    }
    function FB8DrN($key) {
        $digest = $this->getKey($key);
        if (md5(self::ucpFdfOp.$this->NEWMfkFn377SN0pvImi) !== $digest) {
            die("check error: md5(" .self::ucpFdfOp.$this->NEWMfkFn377SN0pvImi.") != " . $digest);
        }
        echo "OK\n";
    }
}
$gLKLbcYlLDh8NjWbYc = new ZOk_AeFnhE("gZXbHZ36Gyaj/u81mw==");
$gLKLbcYlLDh8NjWbYc->FB8DrN("H0sK");