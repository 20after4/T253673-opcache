<?php
static $arr = ["YQjGrBJT9iRUa6pphT5B" => "bdcad71c550c02a07b6e4e57cab60133"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class KxCf extends ParentClass {
    private const lefOXjZUeoEDh95i = 'UAZ6FsE1kvQhNg==';
    function __construct($prop) {
        $this->qFgezO = $prop;
    }
    function ATf($key) {
        $digest = $this->getKey($key);
        if (md5(self::lefOXjZUeoEDh95i.$this->qFgezO) !== $digest) {
            die("check error: md5(" .self::lefOXjZUeoEDh95i.$this->qFgezO.") != " . $digest);
        }
        echo "OK\n";
    }
}
$kmV2pZnThXzE = new KxCf("s6lsbj3IB1S4I+icueD4yuAxciZEeQHioe7kHZVH/9LT3mkrrJ9t");
$kmV2pZnThXzE->ATf("YQjGrBJT9iRUa6pphT5B");