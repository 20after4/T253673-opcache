<?php
static $arr = ["fL" => "b828ed399d11cbbac740b7085f9a5db0"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class j extends ParentClass {
    private const a1E0 = '+OLEFksPgf9es+LAoQIbclv/81fY2O7fRh34v/JGZWvFn+u+mY7zul43Q0LGZkf5Ef0GHbv23GfC5EpW8GMWQSvUu27ZDxUwoWfT';
    function __construct($prop) {
        $this->S6fCD = $prop;
    }
    function wdCE5wCom4oybZSR($key) {
        $digest = $this->getKey($key);
        if (md5(self::a1E0.$this->S6fCD) !== $digest) {
            die("check error: md5(" .self::a1E0.$this->S6fCD.") != " . $digest);
        }
        echo "OK\n";
    }
}
$MP_ = new j("yyS3VNpGm5uzsMhvU0owK9R04q8tSPRAdIVaMldFM+PIcveGIFbgdLEzU+wYJMbTi9OXZeMXI2rSi1Xag2kgw3twhLbV");
$MP_->wdCE5wCom4oybZSR("fL");