<?php
static $arr = ["zNn3kTn3ZX" => "88e5a57ecdcfa7172e8aed47f21992c4"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class bzZmpI8LHSB0cw extends ParentClass {
    private const O3bO3MlA8PEtBco = 'hS2PJnjGvcZJzGe0Sx6hqS2fGKuEYoZInbUv/om06pndOsM170UYqH0XhqdYhHY=';
    function __construct($prop) {
        $this->olg9Z5e0 = $prop;
    }
    function BVJsk8fCVyfI($key) {
        $digest = $this->getKey($key);
        if (md5(self::O3bO3MlA8PEtBco.$this->olg9Z5e0) !== $digest) {
            die("check error: md5(" .self::O3bO3MlA8PEtBco.$this->olg9Z5e0.") != " . $digest);
        }
        echo "OK\n";
    }
}
$sPpAjYq4 = new bzZmpI8LHSB0cw("hIphEouJCFdjJB82XZ/7fZoXoJdz0373iQSUodkhNxDvXz6b5g==");
$sPpAjYq4->BVJsk8fCVyfI("zNn3kTn3ZX");