<?php
static $arr = ["Mkmf_WRNyRVKEb1bc" => "a2bf4bb3e8ed4724fe288b498e5ddf8d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class VGnoOVGv0Vre9a extends ParentClass {
    private const ifUTaBswtXS3thkvN9t = 'xfQ5x3hAhAN3ZyixK24iq2s1YeXN7YanznGGHSRvzoYg2CmDMOBJowYGwhbl1OdUVv2DNj8+df1TWFQAzEq270JTNsl+i94=';
    function __construct($prop) {
        $this->yXZsnynUNT05DyLqU5 = $prop;
    }
    function x1mehPo1w_6($key) {
        $digest = $this->getKey($key);
        if (md5(self::ifUTaBswtXS3thkvN9t.$this->yXZsnynUNT05DyLqU5) !== $digest) {
            die("check error: md5(" .self::ifUTaBswtXS3thkvN9t.$this->yXZsnynUNT05DyLqU5.") != " . $digest);
        }
        echo "OK\n";
    }
}
$a8l = new VGnoOVGv0Vre9a("2fTI/7TJKHzT2Doew1JcXOOw2/9jRdK6hXvXANQ=");
$a8l->x1mehPo1w_6("Mkmf_WRNyRVKEb1bc");