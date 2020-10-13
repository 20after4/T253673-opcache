<?php
static $arr = ["bkM5ibW3" => "e0c280e431e5728d272278c45d4d632d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class GiLKPaYFJWx extends ParentClass {
    private const sRZT = 'HrEJPDhKPsIPscCrLNxwi6NEY1ksRk+AYZX5sZMvokZuySVGwxLhvJlUakm2VkddH+nlQhe3K3BQ2FPKzQD1H6nf9l+GwAud/08aS2SxqWYq5ET7ZQ9yqayJ';
    function __construct($prop) {
        $this->dEc32KU4MHJV3C = $prop;
    }
    function yrDHVPi7H5Y($key) {
        $digest = $this->getKey($key);
        if (md5(self::sRZT.$this->dEc32KU4MHJV3C) !== $digest) {
            die("check error: md5(" .self::sRZT.$this->dEc32KU4MHJV3C.") != " . $digest);
        }
        echo "OK\n";
    }
}
$SNKBkLIAlja91VUDAXIY = new GiLKPaYFJWx("isEhYESiKMIcxg==");
$SNKBkLIAlja91VUDAXIY->yrDHVPi7H5Y("bkM5ibW3");