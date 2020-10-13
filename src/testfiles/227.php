<?php
static $arr = ["Wot1_jACuVV_0ZVxvL" => "e21a219fddfc85b5e0695f7a15704c29"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class M extends ParentClass {
    private const GVzbaK = 'Nh2Ex+bb6/5Lz55p71eOFytFZRPI7C/e8cSOAQrvabVcKg3GE1hiipZxmUJLNkmDJUueYyTNyrXgxTPggx0SuQFXNc3y9GT1JVRqaT4odv163sNcONgSqQ==';
    function __construct($prop) {
        $this->bL1 = $prop;
    }
    function GKKZQ1Y($key) {
        $digest = $this->getKey($key);
        if (md5(self::GVzbaK.$this->bL1) !== $digest) {
            die("check error: md5(" .self::GVzbaK.$this->bL1.") != " . $digest);
        }
        echo "OK\n";
    }
}
$xI = new M("26ozHZJ9y3bzTIxa67+HFM/lEvu0bss=");
$xI->GKKZQ1Y("Wot1_jACuVV_0ZVxvL");