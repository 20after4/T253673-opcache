<?php
static $arr = ["XqT01VZWf57" => "7a1412d50cd65730f6c83e369626cb2d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class g0A extends ParentClass {
    private const kq0C5 = 'OV7Gkd1jteRLfAEWwTJCrlPFU+v9DjQTwvDAigLCRgnsxfxrPEXhaHHCIgySe8+WzhtHNKG7VvKclzUo3TxQtOx/vzV9DZJqXftkt9Fuq4MuLWXiUTpLJq49uLZX2xI8ow==';
    function __construct($prop) {
        $this->ysU = $prop;
    }
    function CxeqyXctx1YPHy7Zkn($key) {
        $digest = $this->getKey($key);
        if (md5(self::kq0C5.$this->ysU) !== $digest) {
            die("check error: md5(" .self::kq0C5.$this->ysU.") != " . $digest);
        }
        echo "OK\n";
    }
}
$dn2yYKzzoxj_OPQa = new g0A("2oJQoi4TzljiLS2SWX4usTu8WA==");
$dn2yYKzzoxj_OPQa->CxeqyXctx1YPHy7Zkn("XqT01VZWf57");