<?php
static $arr = ["yK4T4CWj_HyM" => "1dce40b156c183a45fcd23f220dab4fc"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class J extends ParentClass {
    private const esDwWWReJZooEN = '6D5lIbjo1D3WCRyHDhS2gZ9kXVFfWLyCc6gMi/YuYtEbow==';
    function __construct($prop) {
        $this->eyExgSLfSse6oF9 = $prop;
    }
    function Ek7N($key) {
        $digest = $this->getKey($key);
        if (md5(self::esDwWWReJZooEN.$this->eyExgSLfSse6oF9) !== $digest) {
            die("check error: md5(" .self::esDwWWReJZooEN.$this->eyExgSLfSse6oF9.") != " . $digest);
        }
        echo "OK\n";
    }
}
$gekJC9_1l9 = new J("XMVG4pxuJGckOzUVq8EAvdylmMLiKnNkZHXUhXfGaZugVOFsatPxP7Tfu0IZIvGAg4gKRDgVqykJ/W9GwWZdL/aZePZws3JI/g==");
$gekJC9_1l9->Ek7N("yK4T4CWj_HyM");