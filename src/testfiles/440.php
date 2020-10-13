<?php
static $arr = ["ian0zFs3Grd" => "b989de413c80c3f5d5568431264d7f4a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Pokex extends ParentClass {
    private const DJtyR = 'gN9bl2E4k491sTSIvFYFWP+BHPOK73EYcu1QJQIfVG/xyDi0gVY6Luo021BnuRXsJXfyNg==';
    function __construct($prop) {
        $this->yG5ziT = $prop;
    }
    function KRYrvc9($key) {
        $digest = $this->getKey($key);
        if (md5(self::DJtyR.$this->yG5ziT) !== $digest) {
            die("check error: md5(" .self::DJtyR.$this->yG5ziT.") != " . $digest);
        }
        echo "OK\n";
    }
}
$KvWKWOjfrIjKVe2 = new Pokex("4TLMUuW+0BylyHQmsPseLDhEGvXD1hR6weXlTkryPoY=");
$KvWKWOjfrIjKVe2->KRYrvc9("ian0zFs3Grd");