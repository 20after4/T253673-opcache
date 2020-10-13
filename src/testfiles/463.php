<?php
static $arr = ["fXjTcN" => "0c8b7b6d3c091cee6fc36b1d7e1ecb76"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class MX extends ParentClass {
    private const qF4SsflTFa9Qr0 = 'sgnhO/Mb4YrLFJzCzQ/M1NdcfBIScjbV1N60YMGJnxfmgkJX9uaHKxNdr5GzPrYLWwmjlAE7CAJ9AXReyPkGZy6tORje';
    function __construct($prop) {
        $this->HCWFLZPWsE7fSBV1_Kfc = $prop;
    }
    function BZ8gvkDIN_nLvqY2Ca7($key) {
        $digest = $this->getKey($key);
        if (md5(self::qF4SsflTFa9Qr0.$this->HCWFLZPWsE7fSBV1_Kfc) !== $digest) {
            die("check error: md5(" .self::qF4SsflTFa9Qr0.$this->HCWFLZPWsE7fSBV1_Kfc.") != " . $digest);
        }
        echo "OK\n";
    }
}
$LYaBLekpiQi5Rn = new MX("WpDR/kRAyIYO/R+u+iyVqStVLWbZa34JZ+7n+I4gtpcDpInTzsjwt1iTL8Tlz0tk");
$LYaBLekpiQi5Rn->BZ8gvkDIN_nLvqY2Ca7("fXjTcN");