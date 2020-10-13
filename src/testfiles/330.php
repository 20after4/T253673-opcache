<?php
static $arr = ["TKBfCM50DJbi" => "38c22a42bb2a73df23918a43c57d351c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class B3 extends ParentClass {
    private const HRvayaoP5tqhE6mIkpFG = 'RKMWHBff2DDPcaOIdJOXA/0nNvUi0ltTVKxOmoyBHI263+sAPnWO5TbTuCb42duwmuK1URrv5AW8pwe9Sz8H4dwJe4kVQWmeFwXwGXJRfsqb5tn10K86RplSgCZs0dI=';
    function __construct($prop) {
        $this->HmSzVDMTeh7JN = $prop;
    }
    function ZFQbMTNtrI4AwJ87IRH($key) {
        $digest = $this->getKey($key);
        if (md5(self::HRvayaoP5tqhE6mIkpFG.$this->HmSzVDMTeh7JN) !== $digest) {
            die("check error: md5(" .self::HRvayaoP5tqhE6mIkpFG.$this->HmSzVDMTeh7JN.") != " . $digest);
        }
        echo "OK\n";
    }
}
$d5 = new B3("9kwVTbUQFut57w==");
$d5->ZFQbMTNtrI4AwJ87IRH("TKBfCM50DJbi");