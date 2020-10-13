<?php
static $arr = ["JrM9kETKyJLFmRmxg1aZ" => "038a503fafb7656ef2c80a7f6608a373"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class XBjcyHk4LVicDnmQ extends ParentClass {
    private const O3ePprBX9Oy26RnaR = 't4Kgs87FBd5xtg0gALRczV4Cy7Gp60E2TrpZiPwi5YnSH0aL';
    function __construct($prop) {
        $this->mjXxBa = $prop;
    }
    function FscleNWgpQWzPuDwCAX($key) {
        $digest = $this->getKey($key);
        if (md5(self::O3ePprBX9Oy26RnaR.$this->mjXxBa) !== $digest) {
            die("check error: md5(" .self::O3ePprBX9Oy26RnaR.$this->mjXxBa.") != " . $digest);
        }
        echo "OK\n";
    }
}
$f0zy = new XBjcyHk4LVicDnmQ("RandnYI5jcFsRlUpgxsNz37l8jrXHMN8lZg0ODeQqzDywZFg6Ahke9AC");
$f0zy->FscleNWgpQWzPuDwCAX("JrM9kETKyJLFmRmxg1aZ");