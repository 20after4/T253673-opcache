<?php
static $arr = ["b2AXCTpmHvKdmsUk" => "29be96d16b1eb9cf38bf3d4c85ee27cc"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class l7rJT7NYqihaJJc extends ParentClass {
    private const pTRDuz2t1GC93bcakv = 'v4wwhmqrpGt7/qugiTddoxzyvEsx6viKNqs/bkAAPe+byTCPKWzQvkfTDkXtoiV4P26Nz4OyJ6BKqWcdIZXN18+s6opEBMzwrSKhdJzOrQx3';
    function __construct($prop) {
        $this->thyuiVUo58 = $prop;
    }
    function lg0zZCw2gFsEe($key) {
        $digest = $this->getKey($key);
        if (md5(self::pTRDuz2t1GC93bcakv.$this->thyuiVUo58) !== $digest) {
            die("check error: md5(" .self::pTRDuz2t1GC93bcakv.$this->thyuiVUo58.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ZEgPZcjOXLC = new l7rJT7NYqihaJJc("kK0kMlCPc3G9aFc=");
$ZEgPZcjOXLC->lg0zZCw2gFsEe("b2AXCTpmHvKdmsUk");