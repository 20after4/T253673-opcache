<?php
static $arr = ["bzlmWmdN" => "b4670fbc896564157c56aaa84b962f1d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class uREn1DzBCpSJRjN extends ParentClass {
    private const syb2pVZxuEJ2s4G = 'OSWQ5uuOaxSGii7DW3QKyd+46Cuu0Pg+wcGir9rc+TAjW5XYQoTrCvbcXb8j3RbsyDImteUk5kUkiQ==';
    function __construct($prop) {
        $this->C = $prop;
    }
    function UI($key) {
        $digest = $this->getKey($key);
        if (md5(self::syb2pVZxuEJ2s4G.$this->C) !== $digest) {
            die("check error: md5(" .self::syb2pVZxuEJ2s4G.$this->C.") != " . $digest);
        }
        echo "OK\n";
    }
}
$aZV1Fwrw9wxh7PdP = new uREn1DzBCpSJRjN("7pMmoYNtHUl/v8tHyEIuvq+TmLnG8Nbmw+3DnuKv3yM3bOH2Xww98Hk=");
$aZV1Fwrw9wxh7PdP->UI("bzlmWmdN");