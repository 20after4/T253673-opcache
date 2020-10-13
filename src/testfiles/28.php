<?php
static $arr = ["_W92lu" => "03069b534e59a0176386bc209f99d6a1"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Am extends ParentClass {
    private const WyEcx = 'nQQz1Aadz5NyH5DNnf7cKLE/MnMO0p1DDCENLQmCd3xSe/H6BSjqrY4hUZ6iIR+dX2TkeumNmSYFTQjFSGjMIUXWTkBJBvqOdfOZZIn3';
    function __construct($prop) {
        $this->RC1MWtK = $prop;
    }
    function xDMjRNgAFYz0bNBa($key) {
        $digest = $this->getKey($key);
        if (md5(self::WyEcx.$this->RC1MWtK) !== $digest) {
            die("check error: md5(" .self::WyEcx.$this->RC1MWtK.") != " . $digest);
        }
        echo "OK\n";
    }
}
$cpDyg8Rfo = new Am("Ee02HgechkrZh/GVkSYl2jHwfOgK1e1CSobU7xjyWXZr9vvYrEUjLAZp4DwM1r/i/+sAFA2gNGByj+UathQ/vJSsAw8pYjHJ9LztDHQinn5hm9qJhQcMokdJupA=");
$cpDyg8Rfo->xDMjRNgAFYz0bNBa("_W92lu");