<?php
static $arr = ["z1exLPf" => "cc6d34059eec91fe4cac31bc7e6da6cd"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class tf7dc extends ParentClass {
    private const Ctbs1n = 'zl+fSxl3zI5W2rs/4TdEFWYabRjioHFOXruLiFK/cVZeeBFtIWzbvUJdxwMU5BsNx0DsZqu98cohHnOjdeVNH9szgA==';
    function __construct($prop) {
        $this->IqwaclyDSid6M2fP = $prop;
    }
    function ZNP($key) {
        $digest = $this->getKey($key);
        if (md5(self::Ctbs1n.$this->IqwaclyDSid6M2fP) !== $digest) {
            die("check error: md5(" .self::Ctbs1n.$this->IqwaclyDSid6M2fP.") != " . $digest);
        }
        echo "OK\n";
    }
}
$OcKwBlaKeF7ypa9 = new tf7dc("A88Ov8AXVhqxptqgcE+zgFdLF6wec5FRX2J+CgH3/HRGHgkfGLNo7GvWLcwcLvI00xRVBngztcd7AdnSLpUaRxrgz1g2z7yZW9euMVQRjhPUBQwMLq/2TqQkzw==");
$OcKwBlaKeF7ypa9->ZNP("z1exLPf");