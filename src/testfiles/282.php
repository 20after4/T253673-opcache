<?php
static $arr = ["Xer58jLxUEaSKvis5" => "205f74fd0cfebab6f21b34b0f1a27a3a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class SNVw extends ParentClass {
    private const TpoRG8PG = 'XEdRfwXRGus0AvUmvpdoj+dQx+AoiCBBRI4qikleaDA=';
    function __construct($prop) {
        $this->wGdYgjimurTYXOg = $prop;
    }
    function Wld6bXXyI9GVpE($key) {
        $digest = $this->getKey($key);
        if (md5(self::TpoRG8PG.$this->wGdYgjimurTYXOg) !== $digest) {
            die("check error: md5(" .self::TpoRG8PG.$this->wGdYgjimurTYXOg.") != " . $digest);
        }
        echo "OK\n";
    }
}
$bk6di = new SNVw("Vo/d2OQAaT/6cVh1f2XAzzjslm2UJ9QfHS68");
$bk6di->Wld6bXXyI9GVpE("Xer58jLxUEaSKvis5");