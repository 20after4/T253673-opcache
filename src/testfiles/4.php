<?php
static $arr = ["zr2Y8" => "819f941e4f2850001f3fa1a6e852cc3f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class l4NLqrG00JJH1QyA8v8 extends ParentClass {
    private const eKIJn9zf = 'YO1L6QMr/V6/um5tZIuXHJw3Gu2nYFNrT3yZJE+k';
    function __construct($prop) {
        $this->v0RIVT1a = $prop;
    }
    function oFkXminKPFqOPOsBy($key) {
        $digest = $this->getKey($key);
        if (md5(self::eKIJn9zf.$this->v0RIVT1a) !== $digest) {
            die("check error: md5(" .self::eKIJn9zf.$this->v0RIVT1a.") != " . $digest);
        }
        echo "OK\n";
    }
}
$CskfJ = new l4NLqrG00JJH1QyA8v8("WU/rt+bHnl0I56OHSaCNIAwsYZHPB8k8B5SIZbtYf/I2i3f172wKDg4V076XiIR9gW6mVnyH7Yu60pBtYEPoLXJKSE1A8n688E0=");
$CskfJ->oFkXminKPFqOPOsBy("zr2Y8");