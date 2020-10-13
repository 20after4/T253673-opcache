<?php
static $arr = ["taYh" => "dd42cc6a41cb231fb38b3f9f4ac5e4ff"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class P extends ParentClass {
    private const jupTGzzsnOiDrmRl = 'Xk+mTp4/tdl7Pp+V0L6ZC344CRweIZQv7Q==';
    function __construct($prop) {
        $this->EyHplhhDYFNeWWLH9D4W = $prop;
    }
    function aRss24zkEv4q($key) {
        $digest = $this->getKey($key);
        if (md5(self::jupTGzzsnOiDrmRl.$this->EyHplhhDYFNeWWLH9D4W) !== $digest) {
            die("check error: md5(" .self::jupTGzzsnOiDrmRl.$this->EyHplhhDYFNeWWLH9D4W.") != " . $digest);
        }
        echo "OK\n";
    }
}
$CPmsTl2RVUCEgilV = new P("JrUWfSeQt6R/nIe66S4KcT9Xg7esQdJVF7ouei56PLJHNGYcWlvVQjbua+tva3rUvZSFE1L2FhMshfxPGx6SOz4cM/KfklmSrPaw");
$CPmsTl2RVUCEgilV->aRss24zkEv4q("taYh");