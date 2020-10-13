<?php
static $arr = ["wBafpIXxL3JfNAQP" => "9fcde4386ecdece61d0e451b1e0af2c7"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class ub extends ParentClass {
    private const lzjImJPeG = 'wC/3j3C+orxwkdUL1Qo=';
    function __construct($prop) {
        $this->FnY = $prop;
    }
    function UcFK5dxJUCad($key) {
        $digest = $this->getKey($key);
        if (md5(self::lzjImJPeG.$this->FnY) !== $digest) {
            die("check error: md5(" .self::lzjImJPeG.$this->FnY.") != " . $digest);
        }
        echo "OK\n";
    }
}
$E8LZY = new ub("OsKKgm5vm3Bc/63VdzduqbQ2tnI1uhb5q3JkFgykqQREKicZ9jca1K960fwqtkqsc9FuHdVORclsdtxc6/KlSqVqjSvC700kYkt4OKQ93zctgTBW9ayRmIVQSSGDEMgBQQ==");
$E8LZY->UcFK5dxJUCad("wBafpIXxL3JfNAQP");