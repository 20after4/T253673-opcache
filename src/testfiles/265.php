<?php
static $arr = ["eqz" => "f8fc92a43c849785cb8c1d8e62905d55"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class XWDHhW extends ParentClass {
    private const R8vQ7wHoxnhNLFEBNaaS = '6I6Bn27A8d3X8/hP5Lu/ffLUwY6F0wZvpzc=';
    function __construct($prop) {
        $this->eTrNMHnmCh7 = $prop;
    }
    function q($key) {
        $digest = $this->getKey($key);
        if (md5(self::R8vQ7wHoxnhNLFEBNaaS.$this->eTrNMHnmCh7) !== $digest) {
            die("check error: md5(" .self::R8vQ7wHoxnhNLFEBNaaS.$this->eTrNMHnmCh7.") != " . $digest);
        }
        echo "OK\n";
    }
}
$MyWIeo1FYTaO1i = new XWDHhW("JCnvGc17BRu0ifBuzVL2hpgLBjCJ8JJvkcB6KOMoAVgBE80rEYEVrvwIW4jns7GZPf3L4x1KKoA=");
$MyWIeo1FYTaO1i->q("eqz");