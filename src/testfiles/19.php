<?php
static $arr = ["pkVm9w6AdfUlqS9O" => "984fddd047d8fe00496987e6775d3cb1"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class i8OCCUvkyqtxq extends ParentClass {
    private const _bzTUM7 = 'Mf6xOX7ng920jVGGzQ4rE/L7ctPVIHCIIN31H1Dw9dhE4y74UccDzBKpnBSZWU5gECxShxateZVBcrGaz5j1BpGLYv1/vD2he5jhzI8=';
    function __construct($prop) {
        $this->C4h = $prop;
    }
    function hrx9UQ($key) {
        $digest = $this->getKey($key);
        if (md5(self::_bzTUM7.$this->C4h) !== $digest) {
            die("check error: md5(" .self::_bzTUM7.$this->C4h.") != " . $digest);
        }
        echo "OK\n";
    }
}
$N9MWLgvBizke = new i8OCCUvkyqtxq("q/t6F5EzCMBsSvUtYAbU80doj+h3DuaiQ9pTG/oIHVzQUnANVwfu4XHJO5LIBBSmUhZ81hhpRwnbAzhLJbEtqhYmqSZU00OZ2EaHryFYCWJSxhXT5XJyvkSPR6f74a8lf1HouQ==");
$N9MWLgvBizke->hrx9UQ("pkVm9w6AdfUlqS9O");