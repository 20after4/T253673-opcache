<?php
static $arr = ["fykLFgCHaLccHyI" => "faa018793f4d23797213dbe8b7df88e8"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class B_mx extends ParentClass {
    private const o = 'V+NgkWGAPukn16h+pabGbeMHn/SkbytHFuYWYlStSbAv5bM1JmpKddZLI2x5x1B+pA==';
    function __construct($prop) {
        $this->A9mFVMcZUABPcAYsx = $prop;
    }
    function IAOrA89xk($key) {
        $digest = $this->getKey($key);
        if (md5(self::o.$this->A9mFVMcZUABPcAYsx) !== $digest) {
            die("check error: md5(" .self::o.$this->A9mFVMcZUABPcAYsx.") != " . $digest);
        }
        echo "OK\n";
    }
}
$GKkB1 = new B_mx("V3Uoru5NfIVHDWtr8RU9cw+1PyK1ixhNpNSuRnccYOMQZS3X8CxfdimMg0i19MF7TDdtMSY=");
$GKkB1->IAOrA89xk("fykLFgCHaLccHyI");