<?php
static $arr = ["krP1a2ySiv2T7D5kA44" => "89b853afbff787de1dbe20f74c37ed54"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class aPgVLZe0 extends ParentClass {
    private const UCbnME = 'kh0VD2DGqacUQnxwBV/XzFpvDZ+70galB92LBNthExWd5fNVDBgiUh1Q/0x59acd/nO863obQDvnWHcCtV5xOyU5PW8zJEjYh4pt+n7XpGD5';
    function __construct($prop) {
        $this->ny1hD5j9L3X1 = $prop;
    }
    function P($key) {
        $digest = $this->getKey($key);
        if (md5(self::UCbnME.$this->ny1hD5j9L3X1) !== $digest) {
            die("check error: md5(" .self::UCbnME.$this->ny1hD5j9L3X1.") != " . $digest);
        }
        echo "OK\n";
    }
}
$GaBiI5iDN8pt = new aPgVLZe0("BVSCm9ScgdLAGxA4SPIcJlbZtlanqAN8tk3sPFc6XxRTItcx3WVgXfv0Dn30zG36i/dfxZZbF+RxF2XsjvEGdo2t");
$GaBiI5iDN8pt->P("krP1a2ySiv2T7D5kA44");