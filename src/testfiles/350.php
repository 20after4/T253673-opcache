<?php
static $arr = ["tNykBrPTfcf" => "25ed485a8979afb3977187168bb5f432"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class xb8GEmIs900g_pEQybGx extends ParentClass {
    private const YksPSpoiuhkulWEMhz4d = '5ZXvidwsOES1tJ9i+uUaX18+eoAkXSjGro4L1uBsIAdBBW3BU+VuQRIlBtRqsywCzaPF3psRNAknMS4pSIhQe3xhTAyFgskSSVyWVs9cfsAscjMtvoxlDhODqw==';
    function __construct($prop) {
        $this->LkUNg3dBhF8Y = $prop;
    }
    function rQmSrwdUR4sMR7yOROG($key) {
        $digest = $this->getKey($key);
        if (md5(self::YksPSpoiuhkulWEMhz4d.$this->LkUNg3dBhF8Y) !== $digest) {
            die("check error: md5(" .self::YksPSpoiuhkulWEMhz4d.$this->LkUNg3dBhF8Y.") != " . $digest);
        }
        echo "OK\n";
    }
}
$nk9UEHoh3Waz2Zi3TMx = new xb8GEmIs900g_pEQybGx("K03B2xg2qbAUYYf9qhrdfODKUZdi+s929q9HW3ncEc2O/MrEBg==");
$nk9UEHoh3Waz2Zi3TMx->rQmSrwdUR4sMR7yOROG("tNykBrPTfcf");