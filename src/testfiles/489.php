<?php
static $arr = ["AhrYKve3Iu83dfNvF" => "a784d9ed73172d18acd058485ca892fe"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class aDoIlWo50y7 extends ParentClass {
    private const l3q53wfV57aoxgWCZuTE = 'qEmViYWCbBgzYV9EIsU+U2ou9fUqnMw9DRGcXNVwdiNycXLndlVu8Q==';
    function __construct($prop) {
        $this->wYl6g7U = $prop;
    }
    function JqH55tboPH($key) {
        $digest = $this->getKey($key);
        if (md5(self::l3q53wfV57aoxgWCZuTE.$this->wYl6g7U) !== $digest) {
            die("check error: md5(" .self::l3q53wfV57aoxgWCZuTE.$this->wYl6g7U.") != " . $digest);
        }
        echo "OK\n";
    }
}
$vjhUMR = new aDoIlWo50y7("lxzZC/lCwHIxldxLY/a/KSJLkP4zyGPBL1eG6M8Uzz2VCYG52OtNSrs0nqE6BjBiQCoHBhSblOVdCr/0qKt+0ZYPJ1NALznMA72DMZRQ8nVCsvSlzyY=");
$vjhUMR->JqH55tboPH("AhrYKve3Iu83dfNvF");