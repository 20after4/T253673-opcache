<?php
static $arr = ["JsdO7IqDzBuOZi" => "1f07916952f99eb437dcffade126ee36"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class OsNAjzDyNYuGxFCoOI extends ParentClass {
    private const kgS8Kd6nmfSCKSwF = 'OwxSTfgBLa1JPkZibzzBtHZBG/KSMYDJ4sX/3GWm5d98NkOLV79ZWzPD';
    function __construct($prop) {
        $this->OFYRfAX0lbEnPx1IL_ = $prop;
    }
    function ASY2bP3B7V($key) {
        $digest = $this->getKey($key);
        if (md5(self::kgS8Kd6nmfSCKSwF.$this->OFYRfAX0lbEnPx1IL_) !== $digest) {
            die("check error: md5(" .self::kgS8Kd6nmfSCKSwF.$this->OFYRfAX0lbEnPx1IL_.") != " . $digest);
        }
        echo "OK\n";
    }
}
$fip8Y = new OsNAjzDyNYuGxFCoOI("zbHmfmIGlHi1ps6Pi/J99pVrjhr0Racx8bypmZk87q6iGGui6d94bkxTM+PaStb8iwk+rNhING8YwSgKIBSGsKm3rdZy7kXo3R6AxGvgD6PIHWBmZCTXy7C2ISPCJQ==");
$fip8Y->ASY2bP3B7V("JsdO7IqDzBuOZi");