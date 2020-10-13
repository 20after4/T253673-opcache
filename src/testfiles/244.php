<?php
static $arr = ["AyTUTvAIhQStebAJ" => "690d6374609a3d261962782483e744b0"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class xUpfSdCnEpY1d extends ParentClass {
    private const dtsOP = '8aNGWFLOKAUZNqWxJftzagehDx5elNOtTKT6L+ko0oH0fJstgYQbQjt26qflyW07C65tTvaqShTnpDc=';
    function __construct($prop) {
        $this->F14tqqlKLQXtxdX0SndM = $prop;
    }
    function ND7f6yW3zG_6Dlt($key) {
        $digest = $this->getKey($key);
        if (md5(self::dtsOP.$this->F14tqqlKLQXtxdX0SndM) !== $digest) {
            die("check error: md5(" .self::dtsOP.$this->F14tqqlKLQXtxdX0SndM.") != " . $digest);
        }
        echo "OK\n";
    }
}
$hMFO = new xUpfSdCnEpY1d("YVVwjd9z/qpmDzpMbtTMxRlHaQFxyox/e0O4uLwFvDaL1iMdJU4ZOK0jRdLVYV8xO9tuxUnYJVxun5LxdwZiHiuCwYqOnI3NSrtm0+pTaE4MBBfYE6aAHw==");
$hMFO->ND7f6yW3zG_6Dlt("AyTUTvAIhQStebAJ");