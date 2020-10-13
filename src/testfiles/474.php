<?php
static $arr = ["rqf1Hy6D" => "c40ac7a7b96ddfe7b69857094653bdea"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ozyVfn3M extends ParentClass {
    private const iE7L9DbFOyHURGB_ = 'F/e7UNnKIb1mk+4c+DhMCW82MgzKrJl5PnpEyQfe3/AAlfjvoGqewgZUsWD2DACpXUxwBJ4sTG8yuZQCW9A4y8zs2w==';
    function __construct($prop) {
        $this->TyE5qOC7fFrR2nki = $prop;
    }
    function STs($key) {
        $digest = $this->getKey($key);
        if (md5(self::iE7L9DbFOyHURGB_.$this->TyE5qOC7fFrR2nki) !== $digest) {
            die("check error: md5(" .self::iE7L9DbFOyHURGB_.$this->TyE5qOC7fFrR2nki.") != " . $digest);
        }
        echo "OK\n";
    }
}
$I8 = new ozyVfn3M("EA6TXIEmhkgckuKBdvDRXslLxLCR2IAmLwteSM/XLqW9745KuC83MF53sdxX7PiCMzVluY9a7FJIElcm9aJtGiZSnO2V2ixosYrlzPFbGmdHMSxuDJRnLkw=");
$I8->STs("rqf1Hy6D");