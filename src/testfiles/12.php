<?php
static $arr = ["xP_zrLzSDbPM_" => "bb274632c4bbe6cf834eef50638a9d66"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class vsmdy4A7vF_WgU0puxo extends ParentClass {
    private const SGbuoGyu = 'y1OTOi5H3czjJxBGsahHINzSoMjY9dsn+327/6rQ/VqrwBpb';
    function __construct($prop) {
        $this->NXKcE9wyKmQyZ4y3Zhi = $prop;
    }
    function KtjR($key) {
        $digest = $this->getKey($key);
        if (md5(self::SGbuoGyu.$this->NXKcE9wyKmQyZ4y3Zhi) !== $digest) {
            die("check error: md5(" .self::SGbuoGyu.$this->NXKcE9wyKmQyZ4y3Zhi.") != " . $digest);
        }
        echo "OK\n";
    }
}
$kQoIqSE0Q = new vsmdy4A7vF_WgU0puxo("++vc+hneuOLEyd8H6mQ4wdci9MLfCULqicoFZiqgK2wMBFYjZ+yjdW91e/TQrWnhL3od5CJDWCfQFuNvt2Tf");
$kQoIqSE0Q->KtjR("xP_zrLzSDbPM_");