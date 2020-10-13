<?php
static $arr = ["iQK" => "092931bc03e949341f7286525b7aa843"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class _rw7FN1vnid7 extends ParentClass {
    private const KPpX_0l = '11ASl2NhCrz6zAomszPITrVOHzeZmXBcAWs/IirJ/2cOFaCXD4UM+Wc56vKpBXb1';
    function __construct($prop) {
        $this->a3aCocdYNxObN56 = $prop;
    }
    function mo6ozFi1($key) {
        $digest = $this->getKey($key);
        if (md5(self::KPpX_0l.$this->a3aCocdYNxObN56) !== $digest) {
            die("check error: md5(" .self::KPpX_0l.$this->a3aCocdYNxObN56.") != " . $digest);
        }
        echo "OK\n";
    }
}
$_ugphl9i31E5I = new _rw7FN1vnid7("JlvzioyzfwrhLJIk5GnKZff0f7VYtB0Rz8ZM");
$_ugphl9i31E5I->mo6ozFi1("iQK");