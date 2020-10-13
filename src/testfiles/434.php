<?php
static $arr = ["qxrHwawo26O42" => "4d08b25a448190939d692fe98345726d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class qLm6s7czwbEt49CFcjq extends ParentClass {
    private const FGA = 'fBL/uFDFPgoKK5SiJlz7jxGSinirpOFJM40PoBD9cMGgG6YeOejuUt33sUlxW12IY1R1vMt6PfEeAxs=';
    function __construct($prop) {
        $this->HZO8M1AscY1q = $prop;
    }
    function OxZfgGvucdl3($key) {
        $digest = $this->getKey($key);
        if (md5(self::FGA.$this->HZO8M1AscY1q) !== $digest) {
            die("check error: md5(" .self::FGA.$this->HZO8M1AscY1q.") != " . $digest);
        }
        echo "OK\n";
    }
}
$jA0bElM = new qLm6s7czwbEt49CFcjq("szQEaHegtKeSy4m6");
$jA0bElM->OxZfgGvucdl3("qxrHwawo26O42");