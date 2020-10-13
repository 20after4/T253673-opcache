<?php
static $arr = ["xhYyO94NKf" => "935e077c1e555be53759708dc1f11f25"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ILqFFNaq7 extends ParentClass {
    private const tcp8cE_ = 'blbhxMXWhyolhaxrFuFxuK6QnS6DVbnfbFbfTYy3ic56qIRG6eQdgrk0W4cPxFkh4mL6dp4MDNUESCmhS69Y/iWX5pAb/G8KvmIU';
    function __construct($prop) {
        $this->R_ = $prop;
    }
    function iiGGIm_UxQ7h2_u($key) {
        $digest = $this->getKey($key);
        if (md5(self::tcp8cE_.$this->R_) !== $digest) {
            die("check error: md5(" .self::tcp8cE_.$this->R_.") != " . $digest);
        }
        echo "OK\n";
    }
}
$hA = new ILqFFNaq7("mbfASBrwvZpuwg4IoYn+VSAXaFpA6mXHE0SVrf3dQYrkJ2o3sWf3EdnXoWDgUNIZkYqUxeFHnNjsH94E94cQA9VWflYYUkSmIRjnRnc=");
$hA->iiGGIm_UxQ7h2_u("xhYyO94NKf");