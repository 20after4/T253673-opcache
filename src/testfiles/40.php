<?php
static $arr = ["zEFMpj4kLiXodt9P" => "5a57ea1fb892c556be5a998f3e7d23d4"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class lF8wS0uGZew extends ParentClass {
    private const XG = 'jb6XXGuU3ONQmWWYqdY=';
    function __construct($prop) {
        $this->ZYILSIE8m = $prop;
    }
    function zwln8cPmbJBCrvAEVYfW($key) {
        $digest = $this->getKey($key);
        if (md5(self::XG.$this->ZYILSIE8m) !== $digest) {
            die("check error: md5(" .self::XG.$this->ZYILSIE8m.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Iz = new lF8wS0uGZew("V1hm9nTVMOOKFKbZI4ZxV7t6eaeQ6EyZVjJQ+/jySNwsxGEYh53JPhlAG1G7sm29YTd0bCkByTaDujIg09utwo7ywZRDW1PuifKZaE5vO6eMlH/jrBmDXqSOZ7nXAA==");
$Iz->zwln8cPmbJBCrvAEVYfW("zEFMpj4kLiXodt9P");