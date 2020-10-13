<?php
static $arr = ["X3w8frVz" => "04e9e0207cc02cc0e9fadebbe698680d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class oUINFVGaAQK6pnKoVCAa extends ParentClass {
    private const fMDExZoMUeGgJRf5bMOh = 'sm+BVODv+kk9XprFAnUjyERa3gPmiCdHnUjfHQUv116d3+v8/DeBVHmb8eL8ctJp5jYOW8fYPrCwCp5RlXnP+Ly2juQ434MJLHO1qZCKnw==';
    function __construct($prop) {
        $this->rfdKkVY_PBly1ho3 = $prop;
    }
    function Vr48u($key) {
        $digest = $this->getKey($key);
        if (md5(self::fMDExZoMUeGgJRf5bMOh.$this->rfdKkVY_PBly1ho3) !== $digest) {
            die("check error: md5(" .self::fMDExZoMUeGgJRf5bMOh.$this->rfdKkVY_PBly1ho3.") != " . $digest);
        }
        echo "OK\n";
    }
}
$_NeH0wK39TWwp_AQUs = new oUINFVGaAQK6pnKoVCAa("ZPaAyp3XAFI1YCpwfOtihOU9scIp/jd6FSzrA4A2SjFYCVf4l4pXjPzY+Kj/cHNaO2Wn04A=");
$_NeH0wK39TWwp_AQUs->Vr48u("X3w8frVz");