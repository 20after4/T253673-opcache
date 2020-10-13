<?php
static $arr = ["musNSb" => "f5dfd8c6b62f10a5ef52ae3e690f6390"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ns8Zdq4PK7YtwZbmpce extends ParentClass {
    private const mkMoh = 'MiBAIIG0jYsWukNQV5pNsENRBVqH/DB3OEN9axssUR9urmQzkvtqi/BZo0Yn18b3CWZVT9beO/IM4XiIcYW9ANA/lmd7uxS03RaJs9yPDZArEFRstxBOSA==';
    function __construct($prop) {
        $this->V9HoU70HDv0jRW = $prop;
    }
    function V1nz6($key) {
        $digest = $this->getKey($key);
        if (md5(self::mkMoh.$this->V9HoU70HDv0jRW) !== $digest) {
            die("check error: md5(" .self::mkMoh.$this->V9HoU70HDv0jRW.") != " . $digest);
        }
        echo "OK\n";
    }
}
$yWX = new ns8Zdq4PK7YtwZbmpce("X0qhxfRYRMbKOwfIAG33kUIr28a7nlFFMcHKs3nckATWy2fl4lGOSM48Aq8Y/NYWYN/mCYViFkRCDPNXDq24Y9DgDXori309VmNEnmGIzry2XjQ=");
$yWX->V1nz6("musNSb");