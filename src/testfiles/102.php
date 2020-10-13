<?php
static $arr = ["nuAIEgZIq9tBYy" => "30c1600504f976bb96c66d09d4955c8c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class hjsurIuFpLho8gz65 extends ParentClass {
    private const b = 'VYzkC8lKvPuWTLYSvJbG8umHLBJUyNTGRMGACLMbcN4kxgj/lNjTTb9ldg0oAg==';
    function __construct($prop) {
        $this->yxOr = $prop;
    }
    function fstCZQE($key) {
        $digest = $this->getKey($key);
        if (md5(self::b.$this->yxOr) !== $digest) {
            die("check error: md5(" .self::b.$this->yxOr.") != " . $digest);
        }
        echo "OK\n";
    }
}
$R9s7JWJAHLC = new hjsurIuFpLho8gz65("qf9YOAYkEZJUzUPVkqyWsN2fFW8v2dNhieMZT7AyLZwh31Dk4hpPAKazKnxWsWT911QnOA==");
$R9s7JWJAHLC->fstCZQE("nuAIEgZIq9tBYy");