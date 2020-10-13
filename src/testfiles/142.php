<?php
static $arr = ["vbiElT_1MIomExPix49Q" => "eed6da3da7795df665db346da4e2569a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class CXeBC extends ParentClass {
    private const g = 'GrnrCUhg2PfuJg==';
    function __construct($prop) {
        $this->Kxr4YBVlFi_gKhdgisj = $prop;
    }
    function IIPQUm3uI3PB($key) {
        $digest = $this->getKey($key);
        if (md5(self::g.$this->Kxr4YBVlFi_gKhdgisj) !== $digest) {
            die("check error: md5(" .self::g.$this->Kxr4YBVlFi_gKhdgisj.") != " . $digest);
        }
        echo "OK\n";
    }
}
$f5o4sqS = new CXeBC("hKXH1jpQZXo6XD98+qMScTQTq7bnoGr7Sk6f9zLe8VSvuKmTAuCj/GDPTQOtT0VeOvnNGQ==");
$f5o4sqS->IIPQUm3uI3PB("vbiElT_1MIomExPix49Q");