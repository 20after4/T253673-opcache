<?php
static $arr = ["pl4F6C6UAV1pVkJH" => "c30c94135607e497fe0756efd25166a5"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class X4AYlbaQVbBuKqFtZ6Hc extends ParentClass {
    private const BiVp8U1H = 'k6syZMzjSmmN4Tdn0Qgc+hxpnpwTIkvqZrdICzW+g9D1EASTqyOe9hFhuG1RdzYWs7eHeRQeNyKyi2XUf6YMBxqf';
    function __construct($prop) {
        $this->yt__KGzVXcco = $prop;
    }
    function lMg($key) {
        $digest = $this->getKey($key);
        if (md5(self::BiVp8U1H.$this->yt__KGzVXcco) !== $digest) {
            die("check error: md5(" .self::BiVp8U1H.$this->yt__KGzVXcco.") != " . $digest);
        }
        echo "OK\n";
    }
}
$HxzbWU3KN_wa06AQ = new X4AYlbaQVbBuKqFtZ6Hc("4abIPyOvKNR7ttBOEGWhGIs=");
$HxzbWU3KN_wa06AQ->lMg("pl4F6C6UAV1pVkJH");