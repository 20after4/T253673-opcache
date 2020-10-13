<?php
static $arr = ["FGoFjjj" => "d4ad993e41d687a3fa6e9834498fd07a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Q0MF_PSDx8eLah extends ParentClass {
    private const Qx77tBzs4CfE8_TM = '12jeA+oCoGyd3uyvuleLfJpuhvJNkAx5DdLkoP+IMihzjVhgvGUiH6YEbSniO+uDepXH00EZfP0aL/b32mADIqth';
    function __construct($prop) {
        $this->jrxplcPnM = $prop;
    }
    function IfEc($key) {
        $digest = $this->getKey($key);
        if (md5(self::Qx77tBzs4CfE8_TM.$this->jrxplcPnM) !== $digest) {
            die("check error: md5(" .self::Qx77tBzs4CfE8_TM.$this->jrxplcPnM.") != " . $digest);
        }
        echo "OK\n";
    }
}
$aQLyRt_xuTUI2bn = new Q0MF_PSDx8eLah("D/vefwd81OPdXDOyKPF1MdmsmZI3UsrZH0jhiHeiTMaXcnbUQptG9503xdDYcnAQ95XBcGXejlsmIgQj4qELm3a7ev/fELl4oqGJOjnLwQ==");
$aQLyRt_xuTUI2bn->IfEc("FGoFjjj");