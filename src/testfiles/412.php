<?php
static $arr = ["lXAprG2" => "f1bfbbd47f5fc84dd6cf6a7bacbdae03"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class VFk2je extends ParentClass {
    private const u = '21TyPNGDoU3p96CY+rsUnXj7j99rkHqcAmx0Wm0psP2N7P0aZJ4uzicJbyxFd6CVvM3bEeZ+8ZXc5sWL2vSWR50XetPF';
    function __construct($prop) {
        $this->eKGgzTJIVZUtRB = $prop;
    }
    function ItSRl($key) {
        $digest = $this->getKey($key);
        if (md5(self::u.$this->eKGgzTJIVZUtRB) !== $digest) {
            die("check error: md5(" .self::u.$this->eKGgzTJIVZUtRB.") != " . $digest);
        }
        echo "OK\n";
    }
}
$oZyRt = new VFk2je("b7I8863HpDHMVf3Y5fj6A6PhgejwOfmvFaxqQmH6/3cTIR+PoBmtSQiVA6MnzbJgVrXWz9/t2THuNZfvN0tPuV5KE6BIFGb8uyOO7dZrn1BmzD2fkmu4rZPYkHomCeDWCA==");
$oZyRt->ItSRl("lXAprG2");