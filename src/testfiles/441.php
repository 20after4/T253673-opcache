<?php
static $arr = ["M90od1szu" => "b2a3d60851cb48b75cdffad52e086661"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class LQh4bBsAY0Gndt48vkp extends ParentClass {
    private const jOKJfg6CaXNj7IbPfx = '8KYlukq62TWW4GoMY4+Fjcg1hRZZGLljOUPQNZRIB1A=';
    function __construct($prop) {
        $this->riAScL46d_zDI = $prop;
    }
    function TiFFRDgsGjZKGuuUHqg($key) {
        $digest = $this->getKey($key);
        if (md5(self::jOKJfg6CaXNj7IbPfx.$this->riAScL46d_zDI) !== $digest) {
            die("check error: md5(" .self::jOKJfg6CaXNj7IbPfx.$this->riAScL46d_zDI.") != " . $digest);
        }
        echo "OK\n";
    }
}
$AT6w = new LQh4bBsAY0Gndt48vkp("9jEDkGJ/ho7ZR+T0nUHVonq0MjNnrgWUf5s+WgtdJNLg2OPjruWO8bVSUouaWLHAgeyDZONDH2y/60mE7dYC");
$AT6w->TiFFRDgsGjZKGuuUHqg("M90od1szu");