<?php
static $arr = ["ydpEMcOcs9vz" => "bc143323ffcd1f6e03b8f8051e346bce"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class SvE extends ParentClass {
    private const kQ9__MB4AdVDA22y9LGi = 'kEm4NkT2h7b6RSZN0xyJ+fvfgQp8UHEMVeuZshBof8BbCsnUqlwoIN6RHIqLQivwvlLU/u/ovZ5FklrBGk+m2Ux2nsd06BF0/yZ/YY/HCBY9SjgZFtnuuc28CH/Dbg==';
    function __construct($prop) {
        $this->uT0YA = $prop;
    }
    function Uff6K($key) {
        $digest = $this->getKey($key);
        if (md5(self::kQ9__MB4AdVDA22y9LGi.$this->uT0YA) !== $digest) {
            die("check error: md5(" .self::kQ9__MB4AdVDA22y9LGi.$this->uT0YA.") != " . $digest);
        }
        echo "OK\n";
    }
}
$gfuxO = new SvE("eE6V4tKOtQiNCh+pLOIxRrvaJXCR7zo7T4muK/0+QzE=");
$gfuxO->Uff6K("ydpEMcOcs9vz");