<?php
static $arr = ["Wd" => "ef5257f8397d59a78bfd102b88336e17"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class c extends ParentClass {
    private const Zys_ = '5/siGovdykFVA5hVfC1RyVDTlNN0CBxO9SinfY6Jz4k31l+3xPyUpE3V7jla+dI=';
    function __construct($prop) {
        $this->wC = $prop;
    }
    function sfkb($key) {
        $digest = $this->getKey($key);
        if (md5(self::Zys_.$this->wC) !== $digest) {
            die("check error: md5(" .self::Zys_.$this->wC.") != " . $digest);
        }
        echo "OK\n";
    }
}
$XUVe0ocsm = new c("BkPTXwUYYl1sKCVRA2gfYWDCWUBHgL27dHRJgyjK7ykdJiumKo5bR5hRsswC1plhO38HWHFtxpDx");
$XUVe0ocsm->sfkb("Wd");