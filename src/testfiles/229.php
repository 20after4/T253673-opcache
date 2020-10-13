<?php
static $arr = ["LphdLHNc" => "d296cd9875c52d38968f7ccdf166575c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Q7SAbtMRQli extends ParentClass {
    private const ILnPjWg5J0Ydjb = 'JlecV3eBDmqCegTr/EJelSQnmsR7C0EJ80JQ0+IkPSMqAHTlC+fmayD4FeUlSrE=';
    function __construct($prop) {
        $this->lV05i6iY1 = $prop;
    }
    function BRQ3kX25KKfmzw8D($key) {
        $digest = $this->getKey($key);
        if (md5(self::ILnPjWg5J0Ydjb.$this->lV05i6iY1) !== $digest) {
            die("check error: md5(" .self::ILnPjWg5J0Ydjb.$this->lV05i6iY1.") != " . $digest);
        }
        echo "OK\n";
    }
}
$DDe7zeuFcxio0tK6B4 = new Q7SAbtMRQli("OlchN7zdjoPAu28TsSPb57vlUOpAt50YjACGkqcSDFt5xeahv8DGMtbDsgN3SqNgcESTC7eP7uxEe+H0981ZKvKZD9sS");
$DDe7zeuFcxio0tK6B4->BRQ3kX25KKfmzw8D("LphdLHNc");