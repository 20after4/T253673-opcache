<?php
static $arr = ["WNX71orUUT4nXQT" => "12c9badb094c1555929625fd3aabbdc2"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Yrs extends ParentClass {
    private const uGjFtv5Gucz4qnJsS = 'eflx6ug4DLSrKJAMMra+87nEYMJH+Xm9h24LmVS3tyM=';
    function __construct($prop) {
        $this->Y2PiDrjhsG8RFhPgPTq = $prop;
    }
    function kiSu9p($key) {
        $digest = $this->getKey($key);
        if (md5(self::uGjFtv5Gucz4qnJsS.$this->Y2PiDrjhsG8RFhPgPTq) !== $digest) {
            die("check error: md5(" .self::uGjFtv5Gucz4qnJsS.$this->Y2PiDrjhsG8RFhPgPTq.") != " . $digest);
        }
        echo "OK\n";
    }
}
$v5c0q_nKLOak = new Yrs("Z45fA8MPg2kSeZiBazDU7NTBjhPSBAR85mIOV+R2V9flF3YPXD0uV6Q5mqSFA56+v5ezUz5qUt+2mHFBkFHXhV6hVS98kaHmQ3Raon3g");
$v5c0q_nKLOak->kiSu9p("WNX71orUUT4nXQT");