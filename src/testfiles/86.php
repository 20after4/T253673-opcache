<?php
static $arr = ["UrGPSJwNcwprkr" => "3e6986e5029d6962569b8b7dfc8d2a54"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class wpkt4MOfTEH8ZSOWl0n extends ParentClass {
    private const yWSkjn = 'NPublsn61X8aEIGQ7egI';
    function __construct($prop) {
        $this->xRP5yz = $prop;
    }
    function e7MR($key) {
        $digest = $this->getKey($key);
        if (md5(self::yWSkjn.$this->xRP5yz) !== $digest) {
            die("check error: md5(" .self::yWSkjn.$this->xRP5yz.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ZwoB8V = new wpkt4MOfTEH8ZSOWl0n("Lla9IbqYlJFWyd/gMRtB7Ec2LCgqjzLeMwU6nw==");
$ZwoB8V->e7MR("UrGPSJwNcwprkr");