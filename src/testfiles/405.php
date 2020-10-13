<?php
static $arr = ["_d1lj1fHJGFYCkbT" => "01b7bc44a41b7af6d4c72075ef1e8cf6"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class PoE7Mk8dsPjEzNqq extends ParentClass {
    private const nN0gB6dW8_fb6ywQaAPW = 'wWepCcle9/uC8GN+ck3Hs6WvvY098c/+vEuzx2a+YoGI6j+FlX4aeQmTB378+O5kYNGsP56FMYXCb6uD';
    function __construct($prop) {
        $this->SlqMcUol35edcIT = $prop;
    }
    function J03wYnAMQKpCSgLO2_i($key) {
        $digest = $this->getKey($key);
        if (md5(self::nN0gB6dW8_fb6ywQaAPW.$this->SlqMcUol35edcIT) !== $digest) {
            die("check error: md5(" .self::nN0gB6dW8_fb6ywQaAPW.$this->SlqMcUol35edcIT.") != " . $digest);
        }
        echo "OK\n";
    }
}
$EDb29J = new PoE7Mk8dsPjEzNqq("XmJ1DNoYbYa2X7JjsQx3LtYuHgArXovwNNInutaQzA==");
$EDb29J->J03wYnAMQKpCSgLO2_i("_d1lj1fHJGFYCkbT");