<?php
static $arr = ["kqcak35x76PW" => "8d07c27a8f2cb9241f5e107c5e211975"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class V4S7RYqC9ns extends ParentClass {
    private const qiJQ8cr__FZ0MhuGOd_9 = 'qzYfGZQ2eJb0vegdVvsOlTgK';
    function __construct($prop) {
        $this->CNyCEp = $prop;
    }
    function cSjAhN4vT55TJ6lnRzJa($key) {
        $digest = $this->getKey($key);
        if (md5(self::qiJQ8cr__FZ0MhuGOd_9.$this->CNyCEp) !== $digest) {
            die("check error: md5(" .self::qiJQ8cr__FZ0MhuGOd_9.$this->CNyCEp.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ny = new V4S7RYqC9ns("7RAHqycnhHN1vCQtfc/AkS4fxz4QMWHUtohoB8cBocTrNU274Py6xFbzhg==");
$ny->cSjAhN4vT55TJ6lnRzJa("kqcak35x76PW");