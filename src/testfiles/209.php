<?php
static $arr = ["iCNgGvUgnJf" => "ef2d4a3865979349b72bf9cba1e1fd70"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class _ extends ParentClass {
    private const W3trqwQaW = 'vX+E5gifX4HWuynUGvJUmx2PVrQPG45RjwIi1S+PSUTKjU5CkLDUK10=';
    function __construct($prop) {
        $this->qi = $prop;
    }
    function vnOeyJPRERL7T($key) {
        $digest = $this->getKey($key);
        if (md5(self::W3trqwQaW.$this->qi) !== $digest) {
            die("check error: md5(" .self::W3trqwQaW.$this->qi.") != " . $digest);
        }
        echo "OK\n";
    }
}
$s5m = new _("/ARqUJNoNx7LpmaDKtAGvUoCxCo0phLQJCI8oA9gUOFnRdBoqYs1tyVRkqjcBTNnFnn4UhukdVS+/lNb841my35gFOF2kEYP9wKgUot8Q9Z/3FeGNQ==");
$s5m->vnOeyJPRERL7T("iCNgGvUgnJf");