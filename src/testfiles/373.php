<?php
static $arr = ["dCAM9C8sjl0Y26UW" => "6a275f8d97575a457bfe2cc42d109af1"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class JFJ2pzzJq5mb extends ParentClass {
    private const JmULQDZP5 = 'mgKAL6DdkveBUl37XOV1GDqF+qoceQ3UDyrbQI1Kklv7OJ2VQMqrVqJk2bFZ6O07n96LWlwPhbtBADloKbMi0rLjj2GrfDaVv5tXh5nmUdZVCW7nnO4UboK5reX9HRks1g==';
    function __construct($prop) {
        $this->CNSX9Yh = $prop;
    }
    function t5m5GCU9n($key) {
        $digest = $this->getKey($key);
        if (md5(self::JmULQDZP5.$this->CNSX9Yh) !== $digest) {
            die("check error: md5(" .self::JmULQDZP5.$this->CNSX9Yh.") != " . $digest);
        }
        echo "OK\n";
    }
}
$w = new JFJ2pzzJq5mb("Sbh4efwdnSDNt67H4j5ls5xEStFsp5ImYNDhfLSCT9ghenSJ3SY2Of5Is64sdX4gOC1PxSmb66IUkz5+y3jhlyAu3dbg8jZkesYEksE4ES8rw9c=");
$w->t5m5GCU9n("dCAM9C8sjl0Y26UW");