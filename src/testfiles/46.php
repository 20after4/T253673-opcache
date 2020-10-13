<?php
static $arr = ["_eqGG3DtqFosKja3Hz" => "f5a077ad2b7a896319b1f583be0ea36d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class eTPkfeB5PHCO extends ParentClass {
    private const Zm = 'Y652b+/Y12VbyPt9lhv3yRhDYQuKWlR/jIpupXi/cbX03w==';
    function __construct($prop) {
        $this->YbVvlWghOxK7RFoo1SR = $prop;
    }
    function muCzBxJf2ff7($key) {
        $digest = $this->getKey($key);
        if (md5(self::Zm.$this->YbVvlWghOxK7RFoo1SR) !== $digest) {
            die("check error: md5(" .self::Zm.$this->YbVvlWghOxK7RFoo1SR.") != " . $digest);
        }
        echo "OK\n";
    }
}
$cg2Dj_c75 = new eTPkfeB5PHCO("LWk7rnbHtZtzoDZyEBAKUq64+ilNbIBa");
$cg2Dj_c75->muCzBxJf2ff7("_eqGG3DtqFosKja3Hz");