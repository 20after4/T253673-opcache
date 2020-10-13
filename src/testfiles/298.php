<?php
static $arr = ["E7HAzqv2hqs0fdKJNSj5" => "1b16ec08450ad2a2235dd521699a7b88"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class utk extends ParentClass {
    private const mmOMo0Gd = 'XTRWP84n07IZ0Nt/5ObIigi/+sEatBbbCA84nsyTnffy';
    function __construct($prop) {
        $this->An12cyPdCOwAQMCKtnY = $prop;
    }
    function ctAZDAQwQAI5e2xEeu($key) {
        $digest = $this->getKey($key);
        if (md5(self::mmOMo0Gd.$this->An12cyPdCOwAQMCKtnY) !== $digest) {
            die("check error: md5(" .self::mmOMo0Gd.$this->An12cyPdCOwAQMCKtnY.") != " . $digest);
        }
        echo "OK\n";
    }
}
$GkXlOHnuD2G4GW46th79 = new utk("FLTmCBrkzRZsXtnEb86AtjCNxhH1iYNTZBhn05CF+eAQPw==");
$GkXlOHnuD2G4GW46th79->ctAZDAQwQAI5e2xEeu("E7HAzqv2hqs0fdKJNSj5");