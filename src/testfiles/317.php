<?php
static $arr = ["z3AWKqyMOkQnlPl" => "8c9383cd9a6e15018eb3d6b19e994450"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class kWwZ2tXTQ extends ParentClass {
    private const HPFmRf = 'AyIIS+FAC6akRZ49AfGXeiyyTJjhJc6bz01T30wuDrGza6ibG54vVOda7jni2kyGc/qRMIroshvgoAJAtmJEgODTMgGtQwGPppXHcO+ccJ+UbzuPreHJK80ACkHbFy2Exuc=';
    function __construct($prop) {
        $this->wmv21ppXGRekI = $prop;
    }
    function SIB0pkQn0aVZyKQK($key) {
        $digest = $this->getKey($key);
        if (md5(self::HPFmRf.$this->wmv21ppXGRekI) !== $digest) {
            die("check error: md5(" .self::HPFmRf.$this->wmv21ppXGRekI.") != " . $digest);
        }
        echo "OK\n";
    }
}
$QXvuaFF0X3Z3JpkPSNJZ = new kWwZ2tXTQ("xd1CA4Crp9o9bqYb4bxxmFItNocSpWCDurj0PconaZg/ogLIpLd5kYi7Um+h6YNthyk=");
$QXvuaFF0X3Z3JpkPSNJZ->SIB0pkQn0aVZyKQK("z3AWKqyMOkQnlPl");