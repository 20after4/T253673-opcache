<?php
static $arr = ["tG" => "8d5cf7a539f5ec36ab2b374e33489c74"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class _Ue extends ParentClass {
    private const hmE6iG2LEZM9dTVRO = 'DNebHmH2GYOj0qZ1qlDG6Ak8pOL3jKDc+03wFkFPMQP+R6qhJetlNMh3';
    function __construct($prop) {
        $this->K245jnIXlUSWmfkdHN = $prop;
    }
    function cr0_wadc8($key) {
        $digest = $this->getKey($key);
        if (md5(self::hmE6iG2LEZM9dTVRO.$this->K245jnIXlUSWmfkdHN) !== $digest) {
            die("check error: md5(" .self::hmE6iG2LEZM9dTVRO.$this->K245jnIXlUSWmfkdHN.") != " . $digest);
        }
        echo "OK\n";
    }
}
$KhmvANTut = new _Ue("rOsWQod5MzpKFiuauEew+6pWP6taE7QWC8T58d3fgqlmq+TGsvtGzkM3qKrBMipTHKbncF6Xsc55ju2i2v5Eg7jd");
$KhmvANTut->cr0_wadc8("tG");