<?php
static $arr = ["XEqpytkFiGbGX7" => "ca395d1a4714961c2f730cfeb49a3c5d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class YORShiWW extends ParentClass {
    private const iWHsMIVDEmJQN = 'tzopG2MnCKNhTl6rwGR2EH4qpVc0yWS+NzV6f6Sndboo++/Mi/fvt7DQbzbKxEezGNafr1EyW3y5CaALOjBU6RFAAmv+pmvhRAJvVrind+pRxOAAzeU0ZRa8';
    function __construct($prop) {
        $this->zduwr76vm = $prop;
    }
    function cA($key) {
        $digest = $this->getKey($key);
        if (md5(self::iWHsMIVDEmJQN.$this->zduwr76vm) !== $digest) {
            die("check error: md5(" .self::iWHsMIVDEmJQN.$this->zduwr76vm.") != " . $digest);
        }
        echo "OK\n";
    }
}
$R = new YORShiWW("oHT2a1byjyvpwFHCBn6QCMNb4IGZQC4ItLxCeN+CTz+2xU1c0gmIR8fUYF3OvmUM9xFAbzmYmkXc0zw0OPp9+ci9wQ0an7+5q9AZROoi");
$R->cA("XEqpytkFiGbGX7");