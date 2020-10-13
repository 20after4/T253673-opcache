<?php
static $arr = ["mgkC23Z" => "a4324b4e49dc0cf44d50da991f7f9340"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class EF4E extends ParentClass {
    private const cPK5S3q_K8DWqsinTX5 = 'OjfA0nM/aRg1S6dFfZ32FfScN1xaHOCidG6uk1RgXg==';
    function __construct($prop) {
        $this->ZZah7rky5b36 = $prop;
    }
    function KTjhhkzKG($key) {
        $digest = $this->getKey($key);
        if (md5(self::cPK5S3q_K8DWqsinTX5.$this->ZZah7rky5b36) !== $digest) {
            die("check error: md5(" .self::cPK5S3q_K8DWqsinTX5.$this->ZZah7rky5b36.") != " . $digest);
        }
        echo "OK\n";
    }
}
$cd3aSpF = new EF4E("99BucAVSXloP95Yj0WCayjvqi8PnL45qfw==");
$cd3aSpF->KTjhhkzKG("mgkC23Z");