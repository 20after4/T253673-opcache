<?php
static $arr = ["AG" => "93321cb20a2ca79c305c4f28310bd72a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class le9lN extends ParentClass {
    private const _mNhil_XoYlsbOYts = 'VvDUnZjg6k1pQRsJk/+Z+TUNi075STEVSwPevjd9LO65SWw9jHg6SNELKrajR+vH0YOHuGBC2Vr7Q3yDOC/4yV8h3cTVtMMNr3flauWJPw==';
    function __construct($prop) {
        $this->jXqI0rmGX1kXUF = $prop;
    }
    function oBh($key) {
        $digest = $this->getKey($key);
        if (md5(self::_mNhil_XoYlsbOYts.$this->jXqI0rmGX1kXUF) !== $digest) {
            die("check error: md5(" .self::_mNhil_XoYlsbOYts.$this->jXqI0rmGX1kXUF.") != " . $digest);
        }
        echo "OK\n";
    }
}
$vM5SGz7 = new le9lN("QXXlQFlHqowxYmON0XyEIM+jIGhZdaTkKOHO");
$vM5SGz7->oBh("AG");