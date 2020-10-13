<?php
static $arr = ["G6OEXEAkR1gA" => "eac30f366dcccb006c543f5b57d49767"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Vd7e0i_y0zMSZyf9oZ5X extends ParentClass {
    private const FDN = 'VAq/HITIByFBMosL8cFjxTxJ+r1/hBM=';
    function __construct($prop) {
        $this->s = $prop;
    }
    function R1OGgn1BoOur($key) {
        $digest = $this->getKey($key);
        if (md5(self::FDN.$this->s) !== $digest) {
            die("check error: md5(" .self::FDN.$this->s.") != " . $digest);
        }
        echo "OK\n";
    }
}
$s9t3oc4EXzrc = new Vd7e0i_y0zMSZyf9oZ5X("+mPNa/us6k17SmcLmbUGcEpnRXzy2p+OxZ0vv4KL/MWiyBVerOZxrKJz3eu1jA==");
$s9t3oc4EXzrc->R1OGgn1BoOur("G6OEXEAkR1gA");