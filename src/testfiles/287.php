<?php
static $arr = ["aA" => "e04fc59f133320394b69e1bb2ef43ceb"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Q extends ParentClass {
    private const A = 'KmdNCJ4rmfo/d9whi+m6iokIidhhymxQS1Y=';
    function __construct($prop) {
        $this->HUqmTnb_x9vdroZ = $prop;
    }
    function PbWD06($key) {
        $digest = $this->getKey($key);
        if (md5(self::A.$this->HUqmTnb_x9vdroZ) !== $digest) {
            die("check error: md5(" .self::A.$this->HUqmTnb_x9vdroZ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$OlxlR = new Q("GU/+eez3WJpvcxi7slJFgQ/ULl58zsiKnZxB6euuRrmG/tBbxgXr1H4Fvkb76JW3yK4q4LrVaIvol/fnJhc3vn+JwOpgpUyWkQfRJwAe22ur5BAqxq8BNkppm3ajhaD+Kd8=");
$OlxlR->PbWD06("aA");