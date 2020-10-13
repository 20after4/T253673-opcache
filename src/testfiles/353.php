<?php
static $arr = ["WJkyDFWxrxBn2T" => "588395037acfef3471aad3ff364ab12d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class KKK9MKTDpj84cKQY extends ParentClass {
    private const b9rTdGne9 = 'Z4tJvbtMPYsxNDg=';
    function __construct($prop) {
        $this->RZw = $prop;
    }
    function fT($key) {
        $digest = $this->getKey($key);
        if (md5(self::b9rTdGne9.$this->RZw) !== $digest) {
            die("check error: md5(" .self::b9rTdGne9.$this->RZw.") != " . $digest);
        }
        echo "OK\n";
    }
}
$eBaV7Bei3GDAZypvnf = new KKK9MKTDpj84cKQY("+E4BAbpGy3t8R+YZhN1LThcowg6dYw155eCkyQ80/62UzoPKDfhn4+i23Quv+12UpsAeXK+oVUm14w==");
$eBaV7Bei3GDAZypvnf->fT("WJkyDFWxrxBn2T");