<?php
static $arr = ["ZG6JUHtRjB8SoOFUZ9IT" => "89bd2f16da4ce4ba7810a423c4abe956"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class NFaDz3NvNUnzrk extends ParentClass {
    private const oe6xifRGgp8cVkP = '4uEf8EpPuDiSgG0Hu7DNaNlYbVzfAXoE5NNyqeF+WpxNQ8DBt02Jf+0qzFpROrZNUbg=';
    function __construct($prop) {
        $this->HK_jotK16O2A = $prop;
    }
    function BnyJ8wgKctnX($key) {
        $digest = $this->getKey($key);
        if (md5(self::oe6xifRGgp8cVkP.$this->HK_jotK16O2A) !== $digest) {
            die("check error: md5(" .self::oe6xifRGgp8cVkP.$this->HK_jotK16O2A.") != " . $digest);
        }
        echo "OK\n";
    }
}
$zXd8GodRaaD = new NFaDz3NvNUnzrk("MjImSPLpyZyidOG2+C+Lnf1gHjbrgHnFfH6XVIl2VgaYbYUZ");
$zXd8GodRaaD->BnyJ8wgKctnX("ZG6JUHtRjB8SoOFUZ9IT");