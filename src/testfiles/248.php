<?php
static $arr = ["vTcmiKQPZqOVW" => "d8d7da46bf1c541f792a88cf84a2015d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class S_dtolWfErichiOx extends ParentClass {
    private const xWDUCcu19VtwoOMe = 'J4TNSA6l8eGubU2+M60QRgjgl5nru7E2MSd61AIlNtL36oHUchEcQw1SAqWysV29gLN0LcNQ4KeNZB/0KsWCN+8iiHbBdRBT0R5UEuw=';
    function __construct($prop) {
        $this->ZAN = $prop;
    }
    function _cuecQno4DOR6X($key) {
        $digest = $this->getKey($key);
        if (md5(self::xWDUCcu19VtwoOMe.$this->ZAN) !== $digest) {
            die("check error: md5(" .self::xWDUCcu19VtwoOMe.$this->ZAN.") != " . $digest);
        }
        echo "OK\n";
    }
}
$gxisnhv5o = new S_dtolWfErichiOx("N3ybsEn45v0mvrjsQSVKPiNwgbQ/79QDE59LmyNWWg1V4fJqMrRZwsLYDSLql1o=");
$gxisnhv5o->_cuecQno4DOR6X("vTcmiKQPZqOVW");