<?php
static $arr = ["MJlKLEcxLF" => "bc4927f8dc968137a90fbffb0f92f283"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Syj8aAzKG2u_V extends ParentClass {
    private const C1wMwc6MFA1ySC = 'N93RoRbU8y/E3FS8QGafM8VKBrqGgsRz4YQP1NHPfMjva9kE4KC29F/aUHZynV9m1Hjisdl8TGYjWE5NDWuL2smN7zdGqBmI88PQRL/C8r1N2CibyOOosN+wN88=';
    function __construct($prop) {
        $this->_gwEwGOV = $prop;
    }
    function jTdvp5yEVZuNUmyiJ6ZC($key) {
        $digest = $this->getKey($key);
        if (md5(self::C1wMwc6MFA1ySC.$this->_gwEwGOV) !== $digest) {
            die("check error: md5(" .self::C1wMwc6MFA1ySC.$this->_gwEwGOV.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Wbc4I2d3YP4Ogchw = new Syj8aAzKG2u_V("Z6QMJ21U48gtvfCe3NuMZwIB3/ONto65ftp0CM+Ri7P+lMFSqYNgNEkeFQ5gpqT79Pnht+rgFAOh0eXbys493Z2McXftTGF7JnxD/D+Q1R6KUlguq7GSYiDW9atc4A==");
$Wbc4I2d3YP4Ogchw->jTdvp5yEVZuNUmyiJ6ZC("MJlKLEcxLF");