<?php
static $arr = ["mzsg" => "687c73bfd5ac30b996394841f0f835a6"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class WnZ6rF6a extends ParentClass {
    private const sCWVYMUc4u = '+NUeKHIAzEmpRCVkus8FyiC5gV+yVj8+6f4XbXQkOJx6VAKq3UE9x8ru+S/3LHslTQ==';
    function __construct($prop) {
        $this->EZ = $prop;
    }
    function CAGM($key) {
        $digest = $this->getKey($key);
        if (md5(self::sCWVYMUc4u.$this->EZ) !== $digest) {
            die("check error: md5(" .self::sCWVYMUc4u.$this->EZ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$r0Ma50P2OWWlyWKs = new WnZ6rF6a("FCxYyqLMflA4NA92q0LkcT8ISbuh4zLLLOynOzR8SQDVBx41pn2qy9vGzAR8nssdtNzvjGxYO9qXu69OCsxB2Txv");
$r0Ma50P2OWWlyWKs->CAGM("mzsg");