<?php
static $arr = ["ZlyLP5N1y7jS_QkeY_yI" => "f9424c7571d8716bb272a278791e3355"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class fYX2XCukgCD3QlMyZBI extends ParentClass {
    private const J0HUaGUOwVAIro = 'UiR5NpQEuFb5NL0yxMJlDCftiFceMWS03JStKNZrqLpeJ+OGqTq9Yeq4pMjaMuLqrSVyHPsxtlZ+UEWWjEbGgrtDRTk1nU4+r1HAH2sU2QZyyENXAcOv+5wTR+edbtud';
    function __construct($prop) {
        $this->QQA6C982TJt = $prop;
    }
    function xLej0wLkceo($key) {
        $digest = $this->getKey($key);
        if (md5(self::J0HUaGUOwVAIro.$this->QQA6C982TJt) !== $digest) {
            die("check error: md5(" .self::J0HUaGUOwVAIro.$this->QQA6C982TJt.") != " . $digest);
        }
        echo "OK\n";
    }
}
$cZsn8o6qGJv = new fYX2XCukgCD3QlMyZBI("dOMBhH4p4+i272pHAM0kbby5i0z3WvUiKvY28I81EnTYArHGqcyiBVqHixViOkGfdy3J3niZbUH8YiUqkj3xdvf4FNlDqMKhjBGEFAhcCxKeZnUC2ywaLkBx7cYQHD6bsQ==");
$cZsn8o6qGJv->xLej0wLkceo("ZlyLP5N1y7jS_QkeY_yI");