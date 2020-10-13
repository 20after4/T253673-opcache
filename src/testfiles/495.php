<?php
static $arr = ["IsOTkRFZjkV5tx7pjf" => "eccf0c79a390116a735449c4e9a96af2"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class D4G07MOqiDK extends ParentClass {
    private const yuA6a = 'fPWkBlBBVzdgi0wl3g==';
    function __construct($prop) {
        $this->ep7gR = $prop;
    }
    function L($key) {
        $digest = $this->getKey($key);
        if (md5(self::yuA6a.$this->ep7gR) !== $digest) {
            die("check error: md5(" .self::yuA6a.$this->ep7gR.") != " . $digest);
        }
        echo "OK\n";
    }
}
$tiiS = new D4G07MOqiDK("Piqj3LLi3dYARiG7JUZuJfr1ELM+/raZvyIa/64iAYp/3j7WS1QT+cQV6nqTqTic+gIOUa8d4Gna51m/KHR0Lk+pSMnyYVXEvLmsGF0xnJBhGPQaudSX");
$tiiS->L("IsOTkRFZjkV5tx7pjf");