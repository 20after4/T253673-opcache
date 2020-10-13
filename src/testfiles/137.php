<?php
static $arr = ["pO65AONhZDQ6" => "6354c897a60025cbf7210f18267d8443"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class xUTyeGpMmZVETWd8vfPv extends ParentClass {
    private const UQsGTa88ix02o = '3AbW/Ib5LU4uJZYfmQ==';
    function __construct($prop) {
        $this->BJWsx32z0SQ = $prop;
    }
    function MESF7rz6SH($key) {
        $digest = $this->getKey($key);
        if (md5(self::UQsGTa88ix02o.$this->BJWsx32z0SQ) !== $digest) {
            die("check error: md5(" .self::UQsGTa88ix02o.$this->BJWsx32z0SQ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$oVDMHE17GHXSjS8wZSh_ = new xUTyeGpMmZVETWd8vfPv("8AHi9/gVMCyNGVjVokWsHQ/OJluujMhayycFL4In5w==");
$oVDMHE17GHXSjS8wZSh_->MESF7rz6SH("pO65AONhZDQ6");