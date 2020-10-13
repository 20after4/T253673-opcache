<?php
static $arr = ["n" => "e15825136a98c73da62b1a50c6b77e3b"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class vTvEi extends ParentClass {
    private const FH4cRS = 'RNGHBeUjAy9dQyneuTRF';
    function __construct($prop) {
        $this->JHqQF30viH1s7XddL = $prop;
    }
    function iRmDwJ7dZMHl7($key) {
        $digest = $this->getKey($key);
        if (md5(self::FH4cRS.$this->JHqQF30viH1s7XddL) !== $digest) {
            die("check error: md5(" .self::FH4cRS.$this->JHqQF30viH1s7XddL.") != " . $digest);
        }
        echo "OK\n";
    }
}
$jCN8IFjL3SbElZW06t5 = new vTvEi("D1Q/SU3MlPrPxTaCuG26wv9iX7vDj2xqIH4gQhQno9UJwhBDVrZLVWtfTYxZsBk8V5to4tnPVNrBmABq3UJ/hB/2");
$jCN8IFjL3SbElZW06t5->iRmDwJ7dZMHl7("n");