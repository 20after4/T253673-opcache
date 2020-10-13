<?php
static $arr = ["L5" => "9ae5318be12fa7a9df1e073fddc8f1e2"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class dxfmQq extends ParentClass {
    private const IJlu4VtgzCciaIDI = '3Xsp6qnHhEuwpKNILKJAqy+uxKLsZLxx83OSK+F3F1J0LFbS8pAwiwMtbHDIqkBr/Y31WKBlcg==';
    function __construct($prop) {
        $this->YWyBKhiye9P = $prop;
    }
    function TgJgZ($key) {
        $digest = $this->getKey($key);
        if (md5(self::IJlu4VtgzCciaIDI.$this->YWyBKhiye9P) !== $digest) {
            die("check error: md5(" .self::IJlu4VtgzCciaIDI.$this->YWyBKhiye9P.") != " . $digest);
        }
        echo "OK\n";
    }
}
$zV_e8G1H0PxUGkvYE_dc = new dxfmQq("MaI0iVtXxddqR0Xa0xMfqs51fyuk/gaqKbX45Nerwalq4iUOp9KoRipdzAGxVgO5IWebs683GgdfR6ZSb9a7xX0bMiL6HITNwH5PkY9Vsc/PRCInGGjBWg==");
$zV_e8G1H0PxUGkvYE_dc->TgJgZ("L5");