<?php
static $arr = ["VK0Vgk5aovHKyGjAi4af" => "fd8d3625d368764340eac4f16a9939aa"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ziyiyAFpCCiH8yr extends ParentClass {
    private const IkDzy7K8rpE = '4fYq+F+wM4zv2dj6NYViNyLmip6HkXalLbu87Yr7jxYE7SzQMkaAm0UGjEMn';
    function __construct($prop) {
        $this->hzNNOE1Cfe3 = $prop;
    }
    function MvD4HAN2wMb($key) {
        $digest = $this->getKey($key);
        if (md5(self::IkDzy7K8rpE.$this->hzNNOE1Cfe3) !== $digest) {
            die("check error: md5(" .self::IkDzy7K8rpE.$this->hzNNOE1Cfe3.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Mw676QpCfS7L = new ziyiyAFpCCiH8yr("WuP6U7e6ZOfw0ztZGVgHqkK9Qxs7g/o0QKRC38wF8cCMVyG6Gal6kk3bLXsdCX3KPa1EIOSW4fMH3EKONM8mOZc=");
$Mw676QpCfS7L->MvD4HAN2wMb("VK0Vgk5aovHKyGjAi4af");