<?php
static $arr = ["VAmzsIirXka7iascU" => "75fb168ea0f48675637cdbadbcf656ad"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class vNvsJkef extends ParentClass {
    private const A01KRysWlrw5UGEX = 'UzhY+GKuQGw/JWJh1jFZyaVaqYs85cc2+oOWka/E0n6MjizLZhP83uUKhYlm/sCb9VsadYvWNszx3TPPlGc6N24Y8S3tiEXm1yS6IPsuiA==';
    function __construct($prop) {
        $this->BLmeSP = $prop;
    }
    function MS5IoscGsNAGLm($key) {
        $digest = $this->getKey($key);
        if (md5(self::A01KRysWlrw5UGEX.$this->BLmeSP) !== $digest) {
            die("check error: md5(" .self::A01KRysWlrw5UGEX.$this->BLmeSP.") != " . $digest);
        }
        echo "OK\n";
    }
}
$UJIkakK = new vNvsJkef("iQ3svP9zQtsDtFQt0reKad7y/plFun5FBxoi");
$UJIkakK->MS5IoscGsNAGLm("VAmzsIirXka7iascU");