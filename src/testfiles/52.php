<?php
static $arr = ["MZzpuw" => "0b2f4d576c5423cd7d6dc35c1ee1cc62"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class hI extends ParentClass {
    private const QM2euy00tegs0lxbQ4n = 'sZDfWAkz+rU/i5dmmXYGybwxKsPEEa5Jrk5fsvFNl4eLHlTLud1GoCDG0Wy0vPxg/xSvEVtNZgHPaBO9epiPmMQ+OYn88a+wSTA35zLTlza22Wbgr+WXkj9DLBp2DxKHXH8C';
    function __construct($prop) {
        $this->RdLA = $prop;
    }
    function ufWxgoDNnseoK($key) {
        $digest = $this->getKey($key);
        if (md5(self::QM2euy00tegs0lxbQ4n.$this->RdLA) !== $digest) {
            die("check error: md5(" .self::QM2euy00tegs0lxbQ4n.$this->RdLA.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Z9UpIY = new hI("SmNkOEGtFqBqteZcA5gXlm91IR1yEvKSpv4KzsfE");
$Z9UpIY->ufWxgoDNnseoK("MZzpuw");