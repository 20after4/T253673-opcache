<?php
static $arr = ["VLsUd" => "174aec780868876b86980f2e7c2a47dc"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Q extends ParentClass {
    private const DP = 'iLgsdw4ADNry1qW1mr3pR70QMgr58Jw0A4A4rP7M9lRU6otTUrH6275EIavoyB5kssoOAkLl6HoqSRlsZ2Td/JK87ws8IvKP4YLOrrVMa675/MjLR6llqw==';
    function __construct($prop) {
        $this->Etesy = $prop;
    }
    function Z37jCKxB2cblqLhk($key) {
        $digest = $this->getKey($key);
        if (md5(self::DP.$this->Etesy) !== $digest) {
            die("check error: md5(" .self::DP.$this->Etesy.") != " . $digest);
        }
        echo "OK\n";
    }
}
$qCGaDi = new Q("JhH9dtfMkjQ3p7p0qbdkwhZPLQBibhalg0v9Qiv59plEFvq/eAovwIGMHXq2/yF/lkz2Nhu263NNrOxceh9E6zexJgAccEVLzu2qV55xxWz1JxhOoStTrjabnTpcZHI=");
$qCGaDi->Z37jCKxB2cblqLhk("VLsUd");