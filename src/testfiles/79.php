<?php
static $arr = ["tP" => "35ac0d385dc77140077ef002e900ee0b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class LrS_XsaQ9RqAxN extends ParentClass {
    private const _TZun0Q = 'BMtx72S87aCfLZG72mjmaWLX3QG5C9fS5rkUwoIMkkrseIEgOshFGy4qTouTDP3OXrGfdvNL0oVkFZM3N6DPJLacNpaGemzHDPC6nZ4fiJ5yO/wduvN+tNPmhDWs';
    function __construct($prop) {
        $this->NeSbkWpd = $prop;
    }
    function u_9F397qK6UQ($key) {
        $digest = $this->getKey($key);
        if (md5(self::_TZun0Q.$this->NeSbkWpd) !== $digest) {
            die("check error: md5(" .self::_TZun0Q.$this->NeSbkWpd.") != " . $digest);
        }
        echo "OK\n";
    }
}
$djTZl8TKpolVDWx = new LrS_XsaQ9RqAxN("mkWgQoRXhdiWTPGfIKqSYt2UW2rSeYw6KR65k4f8fI22upO4Ba1hiRUnY4ZP80D9eWMwy2J4qCymlc9x1BpbKv+4mgk6mGW+EhReLoPF+8/IvsaOwqZ42yZcNRK2j/4z2jo=");
$djTZl8TKpolVDWx->u_9F397qK6UQ("tP");