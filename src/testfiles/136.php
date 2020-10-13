<?php
static $arr = ["bQLxiw5pgGeBDM1" => "3c6c36a086d8df275b2db7588b17fc63"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class wW4G6bb2TG3BqpTK5pnH extends ParentClass {
    private const nXy7GWDbbO = 'J/e4hcMGiIZZI48ZCPA3iA8+8yJs9c2dyKGD8WBGVVPxivLelh74cYNnYx0ETdnnkrjOMjVBjCdTztadjADCHOVcJZpiVRmGn+k5oym0wk0g/8DE6aShhYqQsPFD';
    function __construct($prop) {
        $this->nzJN5hTp5ewAu = $prop;
    }
    function oR40Zb8wvWe($key) {
        $digest = $this->getKey($key);
        if (md5(self::nXy7GWDbbO.$this->nzJN5hTp5ewAu) !== $digest) {
            die("check error: md5(" .self::nXy7GWDbbO.$this->nzJN5hTp5ewAu.") != " . $digest);
        }
        echo "OK\n";
    }
}
$jfTzW7d = new wW4G6bb2TG3BqpTK5pnH("hINP0zs4acAWvEL4B9W+Skx2l/poWn8xjPxs8nFe6bV1Y2kTOTMDSbESDL9V341fIhv8nvyxMTExYL2dWWeRZ29vXRvEk3ZwzCj3b4g=");
$jfTzW7d->oR40Zb8wvWe("bQLxiw5pgGeBDM1");