<?php
static $arr = ["WEGJZTO" => "ad48cd0731acb019eff9bb1b78ab12ca"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class cYBd extends ParentClass {
    private const t_C = 'bjYR0r/Pyu81wGrQ3rjKYvo=';
    function __construct($prop) {
        $this->g5ayr2HKf = $prop;
    }
    function yGqvj($key) {
        $digest = $this->getKey($key);
        if (md5(self::t_C.$this->g5ayr2HKf) !== $digest) {
            die("check error: md5(" .self::t_C.$this->g5ayr2HKf.") != " . $digest);
        }
        echo "OK\n";
    }
}
$EFPIhb7xGvvCb = new cYBd("U1fF2H3IQQwJdeaIe0bfhm18ml4=");
$EFPIhb7xGvvCb->yGqvj("WEGJZTO");