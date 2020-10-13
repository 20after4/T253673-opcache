<?php
static $arr = ["TM3" => "bc9c08bc07be7094b0202a318ad6339d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ZM91b_ extends ParentClass {
    private const rbRvN70gF = 'aQuSyn5xcUNh+dXsUKgA03oK';
    function __construct($prop) {
        $this->jrvGpm3o06YSij1 = $prop;
    }
    function lCJV4lbAy($key) {
        $digest = $this->getKey($key);
        if (md5(self::rbRvN70gF.$this->jrvGpm3o06YSij1) !== $digest) {
            die("check error: md5(" .self::rbRvN70gF.$this->jrvGpm3o06YSij1.") != " . $digest);
        }
        echo "OK\n";
    }
}
$K3 = new ZM91b_("CemVXvaKEnqXtxuraojHcvleHEPlsAgIxaY=");
$K3->lCJV4lbAy("TM3");