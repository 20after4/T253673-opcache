<?php
static $arr = ["ZFG7rNGBAOQ" => "4bf8f8ae5f77690895929c6208fb5b15"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class U92VwJiVV5ev17z8zoj extends ParentClass {
    private const c4OLJe0r2H = 'Kt3/x7IDamKRsK/sehCww/RUnqobZx+HfQY4L/T+OGUwKgfmuymXznRWQKDq4BzsF1ks';
    function __construct($prop) {
        $this->vhq2r2iXAA17 = $prop;
    }
    function GrKukAEFwZ2bet($key) {
        $digest = $this->getKey($key);
        if (md5(self::c4OLJe0r2H.$this->vhq2r2iXAA17) !== $digest) {
            die("check error: md5(" .self::c4OLJe0r2H.$this->vhq2r2iXAA17.") != " . $digest);
        }
        echo "OK\n";
    }
}
$kx5GIt = new U92VwJiVV5ev17z8zoj("PRVTuoOCAnWc5kN4FPvrT2vzqFOo6CNYS3Z83bmzTnnQWAK5BLQsFDBWUh//kwJgFVdl1J+tklDH1A2/YGEyDpsHB5L8Xuo/ee86jCk+WZqTLVuuyB+3p54s");
$kx5GIt->GrKukAEFwZ2bet("ZFG7rNGBAOQ");