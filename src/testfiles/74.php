<?php
static $arr = ["PMmekcThUefy1DJbnW" => "cf5dd578a0f2589c766ad2d8d74e3d17"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class qfVtSz extends ParentClass {
    private const UpQ5MKC0Cgf = '+zEG5D/cxbqKE64yViRd+8BuCDlxnX64pkgQMkaAxo5DFYphbvUsrQOBc7yEbB2U';
    function __construct($prop) {
        $this->I = $prop;
    }
    function jl9mctc4gvPUIM38YSG2($key) {
        $digest = $this->getKey($key);
        if (md5(self::UpQ5MKC0Cgf.$this->I) !== $digest) {
            die("check error: md5(" .self::UpQ5MKC0Cgf.$this->I.") != " . $digest);
        }
        echo "OK\n";
    }
}
$NZn4U0_QPVa4 = new qfVtSz("QRvA16Pd+gDXQw7qWkmWTrWfOBnanlk47LzdvQ2bVHbtT9R6HtQXO5yZCJvA4VFvNl2XhWw0jWV8p9dOvQ==");
$NZn4U0_QPVa4->jl9mctc4gvPUIM38YSG2("PMmekcThUefy1DJbnW");