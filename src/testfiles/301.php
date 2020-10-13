<?php
static $arr = ["hlDI" => "c975ff69d74bdb1fd69d12f1001b2b43"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class uP_N8K3OT3XpxA extends ParentClass {
    private const SYo = 'U1zLyRvpgB6j5fCOYVAW9DmDZr1Ab5SjxQ7OoyrjOFknBhpl9YJhY5LIAu/XYhnwouvGoxfiN89KYegqwQBiHUgqVEdNFw==';
    function __construct($prop) {
        $this->zF1eGwU3DLI = $prop;
    }
    function oH7QJS9axeB($key) {
        $digest = $this->getKey($key);
        if (md5(self::SYo.$this->zF1eGwU3DLI) !== $digest) {
            die("check error: md5(" .self::SYo.$this->zF1eGwU3DLI.") != " . $digest);
        }
        echo "OK\n";
    }
}
$qiR = new uP_N8K3OT3XpxA("p/FR8TCbhJ2mpN5bjtMD/I3nKv4IL9yQ7nOdcyfX02sV3ZournGp6Drb8ihP5HY47CliJrAPi3VX3V22h/3hqw==");
$qiR->oH7QJS9axeB("hlDI");