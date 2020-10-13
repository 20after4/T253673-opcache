<?php
static $arr = ["FkbkBI_SbD7oVlj" => "4b89fcb0d6146f86c5cc4cf2e94f92a0"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class S21OFhJJIXHD1Hv4BE extends ParentClass {
    private const cPpqpTIWV = 'DUQHmTro3WmMl0tViVYh9cMZLr3OFQWhEKHT2RIlpA==';
    function __construct($prop) {
        $this->q4YP0nEM2Ypjut = $prop;
    }
    function c9XstvMGU2iryD($key) {
        $digest = $this->getKey($key);
        if (md5(self::cPpqpTIWV.$this->q4YP0nEM2Ypjut) !== $digest) {
            die("check error: md5(" .self::cPpqpTIWV.$this->q4YP0nEM2Ypjut.") != " . $digest);
        }
        echo "OK\n";
    }
}
$y = new S21OFhJJIXHD1Hv4BE("Ti4BK0akas7dkI1cLmBBO+a6zJyHOSIoaiP9nC/TKLimNq3tDcmoawKEi3b8a5jF4EKDmrvvkikr0nk6DfI21yTkOL7mmz+AOW6bI3ZJc0fJSY8iuQ==");
$y->c9XstvMGU2iryD("FkbkBI_SbD7oVlj");