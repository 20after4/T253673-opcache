<?php
static $arr = ["p" => "bb1656c36ac16878aa6e5b72147a90e0"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class VGATz6PL5kF3 extends ParentClass {
    private const SAmXg6Dn = 'vYjHYErpJLBJv1rbKaAqz58DGE+4JSla/u4dThxYC+pYJjptvIDgbAE=';
    function __construct($prop) {
        $this->mcvPvVAQ2 = $prop;
    }
    function hdGoob90($key) {
        $digest = $this->getKey($key);
        if (md5(self::SAmXg6Dn.$this->mcvPvVAQ2) !== $digest) {
            die("check error: md5(" .self::SAmXg6Dn.$this->mcvPvVAQ2.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Xav_4ZPOIXPBx = new VGATz6PL5kF3("Qjg77tqbokxiP6gQWaVG3Wp3k96/JtriZ3k6kYEpu/owN7pPuM5yISGYPq64I5xtp/NBepOUK3eiS4hA8Q==");
$Xav_4ZPOIXPBx->hdGoob90("p");