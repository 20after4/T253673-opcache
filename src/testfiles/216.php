<?php
static $arr = ["ldWX" => "e01c1f75bd56e1d0162464c254db0242"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class L extends ParentClass {
    private const w3 = 'E0Hza/PLk8IF8+yS0Ue1Y/Jug+u23N/oP3MQ13avghnXe2mWchQbqUczdtTJi5s6apzBCP1U3NhQRAs=';
    function __construct($prop) {
        $this->cY7_Cy8zfScckv1Z = $prop;
    }
    function QOmvPbDPfosU0gud($key) {
        $digest = $this->getKey($key);
        if (md5(self::w3.$this->cY7_Cy8zfScckv1Z) !== $digest) {
            die("check error: md5(" .self::w3.$this->cY7_Cy8zfScckv1Z.") != " . $digest);
        }
        echo "OK\n";
    }
}
$hqZVWQHj7yXkS_tX4ee = new L("lR9k/ZEjo+3LcKxfJlq9PJvYXewgL5c6hxCRHfYCgeJotvpEMh8/lPA/iw4Z+g+lVcAKc7l0aaVaz6C8xFI6ic6tOJQ=");
$hqZVWQHj7yXkS_tX4ee->QOmvPbDPfosU0gud("ldWX");