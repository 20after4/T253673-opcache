<?php
static $arr = ["w" => "cb35730eb2fce12651bdb65e1fbe162c"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ZyNFr extends ParentClass {
    private const O_h2ih = 'AY4fNOP0XAroWj5C6wsFDXCijDIuz8pjyO1w6ehOIq01syM6fthJ4iPvcRERpjNdSp1LRA==';
    function __construct($prop) {
        $this->BZ7HOF = $prop;
    }
    function KMhQgUbm($key) {
        $digest = $this->getKey($key);
        if (md5(self::O_h2ih.$this->BZ7HOF) !== $digest) {
            die("check error: md5(" .self::O_h2ih.$this->BZ7HOF.") != " . $digest);
        }
        echo "OK\n";
    }
}
$TqswhqiS6sUG5BdGsY = new ZyNFr("GnG69EYETRD4ZtfITK8O43QfvXGA1C4v2kuDEHLgky/RQynUKrPqOhEMsHeine14mUMO0hnxNd0sZg9h0Q==");
$TqswhqiS6sUG5BdGsY->KMhQgUbm("w");