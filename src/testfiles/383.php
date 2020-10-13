<?php
static $arr = ["uBXYkYfTs" => "eac4af6d0dc63390836fd49ad0b316ac"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class lnMWY9YyyQu extends ParentClass {
    private const rvxi2PgBj8B01PzLZ = 'VOTFicHIYIpH2HLpC+zB0ZtQ9ka+IVdfRZjQFQ==';
    function __construct($prop) {
        $this->mm9 = $prop;
    }
    function Z($key) {
        $digest = $this->getKey($key);
        if (md5(self::rvxi2PgBj8B01PzLZ.$this->mm9) !== $digest) {
            die("check error: md5(" .self::rvxi2PgBj8B01PzLZ.$this->mm9.") != " . $digest);
        }
        echo "OK\n";
    }
}
$uZ4RxQqra8aOzQEQ0yZP = new lnMWY9YyyQu("dehHBXRX5IVJ8wwSD9p+4noR9kF49I47SrU8Wiqso69qxsX+vwtw1Db82Ku513u17V2Bd2DXYjTn/5StsD/yMsWtS5az7VloCNdqa/rWdoyrRerD2IgMHW8=");
$uZ4RxQqra8aOzQEQ0yZP->Z("uBXYkYfTs");