<?php
static $arr = ["QAS" => "246b4fd622a30c5d42754ef9ab7ab830"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class hChXeX2F43zjY4ub extends ParentClass {
    private const b0hMEOy2jPbKRn = '6Yk9wmeXWVmPjt6nkNVfJTlnQ4GaixN81y3Y7xFB+MLf9YEIDcW0Vv7p27ULuAOFYt2fCXdbJgD2dcwALrcvTy2doMo9i9ciSirIOy5FdA==';
    function __construct($prop) {
        $this->YUsYazSsHqfVJky6 = $prop;
    }
    function fNg96fJ0DN1TdpVx29($key) {
        $digest = $this->getKey($key);
        if (md5(self::b0hMEOy2jPbKRn.$this->YUsYazSsHqfVJky6) !== $digest) {
            die("check error: md5(" .self::b0hMEOy2jPbKRn.$this->YUsYazSsHqfVJky6.") != " . $digest);
        }
        echo "OK\n";
    }
}
$hkr4dKgCm4 = new hChXeX2F43zjY4ub("rgj7HwP14AsAv9gw3DWX2hFDn+Y=");
$hkr4dKgCm4->fNg96fJ0DN1TdpVx29("QAS");