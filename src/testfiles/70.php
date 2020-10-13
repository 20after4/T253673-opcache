<?php
static $arr = ["O" => "5faac1779eb94704b696b641373ef7a4"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class qzbGFg6ZKCR extends ParentClass {
    private const N = 'T/8AzEXToSNK01mIMhY=';
    function __construct($prop) {
        $this->FdCTtlU9ouWIoSL2q9 = $prop;
    }
    function XQ($key) {
        $digest = $this->getKey($key);
        if (md5(self::N.$this->FdCTtlU9ouWIoSL2q9) !== $digest) {
            die("check error: md5(" .self::N.$this->FdCTtlU9ouWIoSL2q9.") != " . $digest);
        }
        echo "OK\n";
    }
}
$EEztUUq8rzh90A0ggpj0 = new qzbGFg6ZKCR("jC1R6vmEy6bSu0tg+0nDm7vg2xCI6BKhTrOGnGy9ZufjWiCZz3hbuSwemvpimykSBEc4Q2I5Xf+o1Wr0RkzeMhi7g4wgoOedwyNmoZqaWlY9Zg==");
$EEztUUq8rzh90A0ggpj0->XQ("O");