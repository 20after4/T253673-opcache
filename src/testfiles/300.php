<?php
static $arr = ["mRoHpfgn" => "9f1eb0eebd4e056023daa11b43f7aa79"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class FhBjhbq9du3 extends ParentClass {
    private const Q54enYv2lbAJd5_2B = 'PxVqr2lS5w5o8q4jQf7iJ/v3suegjVwZ0+zXNnx1sSpm3OewOE4SyzZ+wFYOWGOkXY2L85s=';
    function __construct($prop) {
        $this->oXqFOTyuahE3qUmaPDi = $prop;
    }
    function HmthjfaN8uc1L($key) {
        $digest = $this->getKey($key);
        if (md5(self::Q54enYv2lbAJd5_2B.$this->oXqFOTyuahE3qUmaPDi) !== $digest) {
            die("check error: md5(" .self::Q54enYv2lbAJd5_2B.$this->oXqFOTyuahE3qUmaPDi.") != " . $digest);
        }
        echo "OK\n";
    }
}
$PQ = new FhBjhbq9du3("8CVKW34BGVwPGyWEsqh3sHhmDUNd8G4bzpD2wECvsCNlEkVmRgOl");
$PQ->HmthjfaN8uc1L("mRoHpfgn");