<?php
static $arr = ["_ILqLtxa1dm9T0y4e_" => "197cbe019439831167e52e30a7f744a3"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class oKMFp extends ParentClass {
    private const Bq51BGvJe6vRDMK15 = 'GR7VXZbYiaI6U7S44x48VU/5eDRQZdkKKhFFYOTzpYwJvl7vT7TgTEWbHmEfrMhRPpVB';
    function __construct($prop) {
        $this->J_hy0gmL2Whj = $prop;
    }
    function H($key) {
        $digest = $this->getKey($key);
        if (md5(self::Bq51BGvJe6vRDMK15.$this->J_hy0gmL2Whj) !== $digest) {
            die("check error: md5(" .self::Bq51BGvJe6vRDMK15.$this->J_hy0gmL2Whj.") != " . $digest);
        }
        echo "OK\n";
    }
}
$_GJzy2m0T2FU = new oKMFp("ums0DdQRVaEcfwwtSfVHMuED+PKV/IU7Prn2LhzmkMRpCaykecHx0h0wUUKGEtCi/7Wb7DGmzWKKnyJcOmq+8cqJkqnq3i3uYuqEI6nxpfLQEg==");
$_GJzy2m0T2FU->H("_ILqLtxa1dm9T0y4e_");