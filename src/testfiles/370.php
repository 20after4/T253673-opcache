<?php
static $arr = ["NoCRPyboGj" => "ae4e927f622785fb3d2f7bc4be047762"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class dsSidIFh extends ParentClass {
    private const k2iLALlOLpJGST7yUIU = 'gaVdbJzqENM07B+yFZFKCKVaTQ==';
    function __construct($prop) {
        $this->eWHvOMAMWZCp_Glb8 = $prop;
    }
    function HocT8iOIwlyuyqT($key) {
        $digest = $this->getKey($key);
        if (md5(self::k2iLALlOLpJGST7yUIU.$this->eWHvOMAMWZCp_Glb8) !== $digest) {
            die("check error: md5(" .self::k2iLALlOLpJGST7yUIU.$this->eWHvOMAMWZCp_Glb8.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ier4npRi = new dsSidIFh("nG8ybQyc4azGw4tMrw85vpB6iCvoNe8J+H7N07ZB");
$ier4npRi->HocT8iOIwlyuyqT("NoCRPyboGj");