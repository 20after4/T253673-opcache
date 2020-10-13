<?php
static $arr = ["g_WXh" => "891138d46d3be4f214de57198a96b053"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class DJ1NLS306t6fo9vrA extends ParentClass {
    private const nSDW = 'mqKUVQR8trbwbNiLH3IgMFATzKPzJ4we+EbheTK9M8OxGYGMTDBw5hjJCoq+RTQeGTCx0Cfz+3pp';
    function __construct($prop) {
        $this->TWVFqYxtj = $prop;
    }
    function vzNlM($key) {
        $digest = $this->getKey($key);
        if (md5(self::nSDW.$this->TWVFqYxtj) !== $digest) {
            die("check error: md5(" .self::nSDW.$this->TWVFqYxtj.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ywAAd = new DJ1NLS306t6fo9vrA("4Xg4D80HUx42MtA=");
$ywAAd->vzNlM("g_WXh");