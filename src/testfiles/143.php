<?php
static $arr = ["Or78M92kTIo" => "4932d7d253f7bd4cea90d9d18cab40a4"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class uE2SE7iuL1b3af3X91 extends ParentClass {
    private const Q4Lci5Vv0Nh5bdB = 'cuiTSS/dHtSYlIhWdVtRFVD0+PapN+Gdplxh0ANJNhqeSzmJYw60ylh+Z/7XxdNgAMdq1ezeyLls';
    function __construct($prop) {
        $this->Pbh = $prop;
    }
    function XbUEWBIJd_0zTnBBWCU($key) {
        $digest = $this->getKey($key);
        if (md5(self::Q4Lci5Vv0Nh5bdB.$this->Pbh) !== $digest) {
            die("check error: md5(" .self::Q4Lci5Vv0Nh5bdB.$this->Pbh.") != " . $digest);
        }
        echo "OK\n";
    }
}
$fPw0Ff8urng4V9w3Db = new uE2SE7iuL1b3af3X91("yeqCs/G76I9vg5CbfEw42R4Lkgx4qapregQzkKVOjRqitDZ+bs/FRmSkLQ+HpJXGhZRfvkBS42np7RWCgP+byhebhpl0fnVdQtZKVjsObhtwQHTbRQBCV2HU9gGO");
$fPw0Ff8urng4V9w3Db->XbUEWBIJd_0zTnBBWCU("Or78M92kTIo");