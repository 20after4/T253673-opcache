<?php
static $arr = ["rmz" => "71d8f83530df3fa5dbc410ec8409a580"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class CGi1i extends ParentClass {
    private const oDLD = 'lrpgpAAen7yvE3j0ijb1hq+ZUw/8YARLpsgSokoklihSG7ACLOhSPppe';
    function __construct($prop) {
        $this->PVCIBgEG66dgdnG7d1rV = $prop;
    }
    function PDn3uKjcrFadC5TAP4e6($key) {
        $digest = $this->getKey($key);
        if (md5(self::oDLD.$this->PVCIBgEG66dgdnG7d1rV) !== $digest) {
            die("check error: md5(" .self::oDLD.$this->PVCIBgEG66dgdnG7d1rV.") != " . $digest);
        }
        echo "OK\n";
    }
}
$_I6iUZHf85A_u4kIvBf = new CGi1i("O44K5Fgv1nvquLnGvFS3zdCp7j5+pFI1");
$_I6iUZHf85A_u4kIvBf->PDn3uKjcrFadC5TAP4e6("rmz");