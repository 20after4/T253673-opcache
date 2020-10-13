<?php
static $arr = ["elnqGGPzOqQ0d" => "8d9f7ceb00d83d3fee25d21bba8ce7e8"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ff6fGP0MGC6izIFl extends ParentClass {
    private const Qn = 'Q/PksStsSadP/3uZAwy4+511ZhFdnQ5qT0uac1rsOMqmdhY69O1VWfjcIQfIIXLDf2NXXm4WmZSh+b2ir/iASJlrCaXUZ9A9Ojw03+Mk8EdAu/GAKjUXpSgPkg==';
    function __construct($prop) {
        $this->AbACqs2lNucaC3kW95x_ = $prop;
    }
    function TGAqGK($key) {
        $digest = $this->getKey($key);
        if (md5(self::Qn.$this->AbACqs2lNucaC3kW95x_) !== $digest) {
            die("check error: md5(" .self::Qn.$this->AbACqs2lNucaC3kW95x_.") != " . $digest);
        }
        echo "OK\n";
    }
}
$J3FpnM1MmytbNeFC57 = new ff6fGP0MGC6izIFl("+9mZUXVkwp9O41ceZ/2s9m7One6eU4a4Gqt5Jrdh+imAvIE=");
$J3FpnM1MmytbNeFC57->TGAqGK("elnqGGPzOqQ0d");