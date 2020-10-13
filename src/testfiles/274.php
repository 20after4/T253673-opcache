<?php
static $arr = ["ipM1DjcgT9Tdg" => "22944dc80b1fee615dd2b351e6234385"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class fQxpXAig6eVwp797 extends ParentClass {
    private const jt7fMAPXJ6A3pQvmrXY = 'tqMzj/JOEVipbcasJIHMNQpOSH77Qv1e9Dlz/HByHfK8yruZbqgRvgBK1eGfW1pUfAbIqAa9XgemM7Ph6uH2bO4dIkd8Zjq52PpI';
    function __construct($prop) {
        $this->V0Jqmc2qXfHPbENzX = $prop;
    }
    function bGuGI5TIGznddvg($key) {
        $digest = $this->getKey($key);
        if (md5(self::jt7fMAPXJ6A3pQvmrXY.$this->V0Jqmc2qXfHPbENzX) !== $digest) {
            die("check error: md5(" .self::jt7fMAPXJ6A3pQvmrXY.$this->V0Jqmc2qXfHPbENzX.") != " . $digest);
        }
        echo "OK\n";
    }
}
$wv6Zpmi = new fQxpXAig6eVwp797("F0g/MizGht9ovU24IbU9Wng5uOpqGXjdfjvZXJf3YKQGhkZ/euY5KVuUAw2bAL/GJYfXlYmR16YGC3smWytzUyEt25b1HtayvO6849E9Tu1AZW3LwlvYfbFYnZMXGA==");
$wv6Zpmi->bGuGI5TIGznddvg("ipM1DjcgT9Tdg");