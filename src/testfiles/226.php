<?php
static $arr = ["ZkA" => "363b1dfbb07ee94a5f9392e57e291edb"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class tSRARDYK9YA2CikqeK extends ParentClass {
    private const rAjOxk2XduSx = 'qck6njmk95dxx3bu/r5IItTsiGe9I12B9E9jZMWyokcbSPmI3b6yCZIunK1gCw/DSMNq/SN6KZrPoSOCYxSHAmNQPD+o6xGVJ4uX5EUOZkP13YwSZQxGaTrcJ+/JrwnN';
    function __construct($prop) {
        $this->dy3LMCn7144BfcO = $prop;
    }
    function DuhsiQazc2LtwP2qlq($key) {
        $digest = $this->getKey($key);
        if (md5(self::rAjOxk2XduSx.$this->dy3LMCn7144BfcO) !== $digest) {
            die("check error: md5(" .self::rAjOxk2XduSx.$this->dy3LMCn7144BfcO.") != " . $digest);
        }
        echo "OK\n";
    }
}
$WDSaii0 = new tSRARDYK9YA2CikqeK("8wZJXLd3oyYqNLi/3WZZooDGGpAQY0OO3A==");
$WDSaii0->DuhsiQazc2LtwP2qlq("ZkA");