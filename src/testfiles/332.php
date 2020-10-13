<?php
static $arr = ["e0" => "8325df3c9cece3b756b01aafcdf8ab4f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class PZy7Ig1wy9Nvt1IJDV extends ParentClass {
    private const oGTL742 = 'JHDBG0wLS1Yt5wlhF92o1ySgew==';
    function __construct($prop) {
        $this->cYX = $prop;
    }
    function KWXOMX($key) {
        $digest = $this->getKey($key);
        if (md5(self::oGTL742.$this->cYX) !== $digest) {
            die("check error: md5(" .self::oGTL742.$this->cYX.") != " . $digest);
        }
        echo "OK\n";
    }
}
$_jTYAJzJ_emhtmBMoLZJ = new PZy7Ig1wy9Nvt1IJDV("SKrylemfTr47GcoWtO69f5BoHHTHe9YIhqFGkMnFQ8PADtokm10h1iW30Ka1BCGaGrTHNPigkxV/eafwLYEs");
$_jTYAJzJ_emhtmBMoLZJ->KWXOMX("e0");