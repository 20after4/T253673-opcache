<?php
static $arr = ["X" => "0f51726f319c8b53e3438472ae853794"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class iNYgXqfp extends ParentClass {
    private const rwtkHdF = 'FzYIQosIoXP6pKrH8//8/9FdDXVL48A=';
    function __construct($prop) {
        $this->N9KU = $prop;
    }
    function lLaRl($key) {
        $digest = $this->getKey($key);
        if (md5(self::rwtkHdF.$this->N9KU) !== $digest) {
            die("check error: md5(" .self::rwtkHdF.$this->N9KU.") != " . $digest);
        }
        echo "OK\n";
    }
}
$q = new iNYgXqfp("QoEHcuYumowi7OGxHb0+eGxoo+DYWYvqunTj2mlMu1FDxlHGz08z07LbSNNfx5pL1Q==");
$q->lLaRl("X");