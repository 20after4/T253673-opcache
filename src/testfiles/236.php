<?php
static $arr = ["wO_Ob_CrW2z4A_rl" => "d316ef8798f672af2b8e5469950a293d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class X3TlzzJdsxJTXqpyih extends ParentClass {
    private const KNedN7ex2 = 'VK2P11bSy8JPkjTeyrT40nQq08bnav79swnyKxjaGOSmZwk+jzWC';
    function __construct($prop) {
        $this->XSE3 = $prop;
    }
    function e($key) {
        $digest = $this->getKey($key);
        if (md5(self::KNedN7ex2.$this->XSE3) !== $digest) {
            die("check error: md5(" .self::KNedN7ex2.$this->XSE3.") != " . $digest);
        }
        echo "OK\n";
    }
}
$s2 = new X3TlzzJdsxJTXqpyih("bxO5MNxXSfKqWcto3WLaxN/46wAiWRgr6puHuuWfSxNHdKfq+RmHOjVyDyYH5Zw4ZYR0XSB4rDVb");
$s2->e("wO_Ob_CrW2z4A_rl");