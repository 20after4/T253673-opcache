<?php
static $arr = ["x1cuRAQHp" => "9cb2c1c48f598b593160018f8c465f42"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class epx extends ParentClass {
    private const FDOABJ = 'd2dl/6iYD5ElZRjVGjTMvw==';
    function __construct($prop) {
        $this->s = $prop;
    }
    function v4pxXnr1($key) {
        $digest = $this->getKey($key);
        if (md5(self::FDOABJ.$this->s) !== $digest) {
            die("check error: md5(" .self::FDOABJ.$this->s.") != " . $digest);
        }
        echo "OK\n";
    }
}
$wQgfIbWwGX = new epx("MA8zNvrlAxsukuNNkI4YfCp1wS3dYxMC9t/m9XhrpErA77L4SvoucNU7Fr537me/1chhx8k4LAW8s4WDVSi72mxCjKRPBJ6JOCmu62SF/9oZDtadcXaencpqOVSUbA==");
$wQgfIbWwGX->v4pxXnr1("x1cuRAQHp");