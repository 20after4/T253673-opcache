<?php
static $arr = ["QnVXTDHR3k3n" => "389f6208d57b7627b5485e3a4d485a0d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class RoHUwBrxYhCTFa extends ParentClass {
    private const XmRZ9vii_OUQ1ceHe = 'IWSsX9Trqus+OmvXaU58HdVI';
    function __construct($prop) {
        $this->aG = $prop;
    }
    function lSQDvqD1toF($key) {
        $digest = $this->getKey($key);
        if (md5(self::XmRZ9vii_OUQ1ceHe.$this->aG) !== $digest) {
            die("check error: md5(" .self::XmRZ9vii_OUQ1ceHe.$this->aG.") != " . $digest);
        }
        echo "OK\n";
    }
}
$serjDNg721gSdZYG = new RoHUwBrxYhCTFa("9HcEb6wlhIE3GvR5vJx3eJV0d2kCrnCq2gVg1/kl9q3NNz2GmuXA7AolpeybqC4oMSsH9x9TmwygLixf");
$serjDNg721gSdZYG->lSQDvqD1toF("QnVXTDHR3k3n");