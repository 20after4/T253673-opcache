<?php
static $arr = ["GZi_HYGuypKJnKk" => "2766f14f251ecd5242c7011e0583a185"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class jQSwWKSGj7Tc88YQ6jRg extends ParentClass {
    private const cGKYm = 'monwVjWSas9+vokKL8x8Rz3tNX0Js/v8X4U4wV3mkYHGHN0+ZfFyqQGl+rIYVy+no75eiBORQq8cHJIF0+QsrAUyHAhgCcEnl/gycpln1b84A3xJgNzgTLaGIWqjb70/TA==';
    function __construct($prop) {
        $this->CRj0lSsVacxKa3uhSn4 = $prop;
    }
    function oLCbpwB5G9mR($key) {
        $digest = $this->getKey($key);
        if (md5(self::cGKYm.$this->CRj0lSsVacxKa3uhSn4) !== $digest) {
            die("check error: md5(" .self::cGKYm.$this->CRj0lSsVacxKa3uhSn4.") != " . $digest);
        }
        echo "OK\n";
    }
}
$dB = new jQSwWKSGj7Tc88YQ6jRg("olyeAW5Bny3nTQPtvshNpfvGx6W0j2qqi+fVTHCSHnUOZvRbkuBsbq66mUCYCd8/sssSNj6UiZKggaHa4VWi+X3BR70YTJHVWV6uy+t/UyiKu3oG43zu");
$dB->oLCbpwB5G9mR("GZi_HYGuypKJnKk");