<?php
static $arr = ["P" => "da5d3a33774ebca372cc44644a6ec042"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class L92aOmPB2t7Q1S extends ParentClass {
    private const DgZ = '73LRMR5M8xMGJQ3WWsVdSF1cK6MViUcRX/9n7Sk=';
    function __construct($prop) {
        $this->xy4SgNgn_gaPEb3WgYd = $prop;
    }
    function Xokf98b3PO9($key) {
        $digest = $this->getKey($key);
        if (md5(self::DgZ.$this->xy4SgNgn_gaPEb3WgYd) !== $digest) {
            die("check error: md5(" .self::DgZ.$this->xy4SgNgn_gaPEb3WgYd.") != " . $digest);
        }
        echo "OK\n";
    }
}
$gEleVOrMjwCr_PGh = new L92aOmPB2t7Q1S("uRhu0ZpAek2nD+uvjnnwuvY6X+y33gXlhFGKNQ4dj1tV1ZzYGg44yfWljS5zGMJIeSFXfVP9k0wPPA6E");
$gEleVOrMjwCr_PGh->Xokf98b3PO9("P");