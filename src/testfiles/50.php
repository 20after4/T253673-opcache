<?php
static $arr = ["QfjuA" => "ada7fe24152f6d460b322b59d2a3bdec"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class WxlaQT extends ParentClass {
    private const pbMVZJSm = 'iVljRPHKj4CjTbA2jXE=';
    function __construct($prop) {
        $this->K8p6Xgl8YJP = $prop;
    }
    function IOEi3Anauk($key) {
        $digest = $this->getKey($key);
        if (md5(self::pbMVZJSm.$this->K8p6Xgl8YJP) !== $digest) {
            die("check error: md5(" .self::pbMVZJSm.$this->K8p6Xgl8YJP.") != " . $digest);
        }
        echo "OK\n";
    }
}
$sRZxwXOKqPM = new WxlaQT("DIZErx4Bos4zNtbwZfMOg4lBBgGjpXhC9Uy/lUtx");
$sRZxwXOKqPM->IOEi3Anauk("QfjuA");