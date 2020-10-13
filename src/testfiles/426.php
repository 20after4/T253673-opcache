<?php
static $arr = ["j5WEWIDM" => "f02161213104fc450a54aaa1bef1f089"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class UPJLeKczdjSn3_rR8 extends ParentClass {
    private const OQOTTjvu = 'bymrGU4HuXsT/mLDBJfChev/ujDgnrl8quRcuzN8VHpD79tPWCr+KLPclILlDYWjdmUxg+eGGcPkNIxLmTCP';
    function __construct($prop) {
        $this->oF0WohuY4Q = $prop;
    }
    function Hys1gzBE1qv82lEU5rjA($key) {
        $digest = $this->getKey($key);
        if (md5(self::OQOTTjvu.$this->oF0WohuY4Q) !== $digest) {
            die("check error: md5(" .self::OQOTTjvu.$this->oF0WohuY4Q.") != " . $digest);
        }
        echo "OK\n";
    }
}
$L2 = new UPJLeKczdjSn3_rR8("nvCW0ipr0K5lGBLnX3s55XDjy00eeqpF4UDtDvIVa7f7lo1FSAXNvDucbrWhSN0sAVyKRndc7jD4qYzq");
$L2->Hys1gzBE1qv82lEU5rjA("j5WEWIDM");