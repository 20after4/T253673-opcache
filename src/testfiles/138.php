<?php
static $arr = ["AEZ1" => "ad52f2907f3a45715cdcce7ebd23f1bc"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class spZVOAo3cACDEGz extends ParentClass {
    private const j9 = 'vQ86Tjn1EWdI59rRNm+fy0nyZcPJxktz7JJhYhFoHSkwz8kWoqqJEeWi8b/uqmano2OX0viuHh49BO4=';
    function __construct($prop) {
        $this->v2IFtqdPsHJ = $prop;
    }
    function zLwG($key) {
        $digest = $this->getKey($key);
        if (md5(self::j9.$this->v2IFtqdPsHJ) !== $digest) {
            die("check error: md5(" .self::j9.$this->v2IFtqdPsHJ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$t3X = new spZVOAo3cACDEGz("PkgbbOvcMl1BUjpmEF1aJwCpO2el5w8D52cH235sNHeYwl4ywTTEyIJiEyn3/bQuyr4VBLJoF6qyqWhWJxJhWngX1TXHA5us8kkaDFLF+Q1PhZ4/Iw==");
$t3X->zLwG("AEZ1");