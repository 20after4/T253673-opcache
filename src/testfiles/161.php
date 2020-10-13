<?php
static $arr = ["jgS96Ir5VZs0k8g" => "406b68cff7d8aa5945d8e73a9c683814"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class gz extends ParentClass {
    private const FSVt0AlmNDn = 'tzxaw7sYYECWeL5iNMEYwJXMvFNmVJQ7IYLZWGnRU7smohvtmk0zUtZMDavGkBe5rKpx2i4T7XuEJODU6txEnelzcySjnOvTid7pC9yxHlUlqQKPpw==';
    function __construct($prop) {
        $this->PbHlk5p = $prop;
    }
    function cPboek90G1PtDWc($key) {
        $digest = $this->getKey($key);
        if (md5(self::FSVt0AlmNDn.$this->PbHlk5p) !== $digest) {
            die("check error: md5(" .self::FSVt0AlmNDn.$this->PbHlk5p.") != " . $digest);
        }
        echo "OK\n";
    }
}
$qdFrtqvLlIlU_sZX = new gz("qR7KqYpdEmW8cpz7RusNz+WHcTXcM+Mn4amhCrv7GqbAM+ttBwyB+O5Eo/deO/vMmpfsJCs0IeNVB1eHZ2yJfE3houDCj+N42invIpkElNK3vYXd");
$qdFrtqvLlIlU_sZX->cPboek90G1PtDWc("jgS96Ir5VZs0k8g");