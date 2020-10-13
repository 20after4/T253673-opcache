<?php
static $arr = ["cgcMytTJsR1WicnSgQ" => "428ee4db84c85e94eb42098e6c45fef4"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class hpBZmq extends ParentClass {
    private const G_m1nPJU9UQSHTjoeFc_ = 'Y8lmBh6Rw9xJtxVFLjoTnvHwBs8N';
    function __construct($prop) {
        $this->CVwCZ5kMViINHsloYX = $prop;
    }
    function dNu($key) {
        $digest = $this->getKey($key);
        if (md5(self::G_m1nPJU9UQSHTjoeFc_.$this->CVwCZ5kMViINHsloYX) !== $digest) {
            die("check error: md5(" .self::G_m1nPJU9UQSHTjoeFc_.$this->CVwCZ5kMViINHsloYX.") != " . $digest);
        }
        echo "OK\n";
    }
}
$IGGhjtNK = new hpBZmq("9Tku2D8UusgM6kmTvgQlDwI6ysjHtrM6umPRFWin2w3Trrytpw==");
$IGGhjtNK->dNu("cgcMytTJsR1WicnSgQ");