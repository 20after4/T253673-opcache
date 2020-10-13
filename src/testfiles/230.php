<?php
static $arr = ["UE8XkkDlRGgK_8" => "23a981130ea4dce65eaec7dbe365e05d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class IKIfS extends ParentClass {
    private const cSKVua = 'IGbShPcoSk1egEL/pJRPKG9vrVz8ehSWDdc+89UyuBfZtlBAxMSbmjk=';
    function __construct($prop) {
        $this->huFkljhVjcSZhMh = $prop;
    }
    function ADNz2SAlA($key) {
        $digest = $this->getKey($key);
        if (md5(self::cSKVua.$this->huFkljhVjcSZhMh) !== $digest) {
            die("check error: md5(" .self::cSKVua.$this->huFkljhVjcSZhMh.") != " . $digest);
        }
        echo "OK\n";
    }
}
$asraN = new IKIfS("sw0b0JWn6Z5v6but5oBpm+n3OCa4flTqiKD85xij4eWqZ29zwKdpZuz7e9AAqIZp7E4E31QlrNPuvDY+PxR+WPdPG+J7pJJ1");
$asraN->ADNz2SAlA("UE8XkkDlRGgK_8");