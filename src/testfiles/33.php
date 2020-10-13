<?php
static $arr = ["GH_FtO6XS6i7" => "725c6a9b96232d6000915a5577b90f7f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class lgHHVv0WoNZDzIv extends ParentClass {
    private const ePBXy1Dp20e = 'rWX8k1NlA7xOe5wlzH2oZe3Vx46vmNton0IQD09AcOZJF3Qqy9344OfN5v7XwfOPNiCzHxdMKPGcutw2p51tX+/zmCyrcXXVBhwQ2Zl+ZQKZ0M3F4rgc6CVE0A==';
    function __construct($prop) {
        $this->lRh2 = $prop;
    }
    function OY01U63wSsXLd($key) {
        $digest = $this->getKey($key);
        if (md5(self::ePBXy1Dp20e.$this->lRh2) !== $digest) {
            die("check error: md5(" .self::ePBXy1Dp20e.$this->lRh2.") != " . $digest);
        }
        echo "OK\n";
    }
}
$qyObxRRNvfuEzCOH = new lgHHVv0WoNZDzIv("4DBesVQ0BNwMn7DT9RF4U0lPY54hcS4uJZ3rxgjEZtslP7i0+TYlNnsU3IYIijMr");
$qyObxRRNvfuEzCOH->OY01U63wSsXLd("GH_FtO6XS6i7");