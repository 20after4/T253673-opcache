<?php
static $arr = ["b6JaQVb" => "6346362cadec0a309abc73bd4b1e2149"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class a1ZhoQ4QCIga extends ParentClass {
    private const n4DVamc9wmgd = 'suDipyY2G+9gZv1GmdeRpgjCzBV0X3voj9I05iPrO8POvkYw2ktNpQXmDfFJtdDxRiEcK0eW8a7n0OFSDL7mIShJJAfvC5/X/+hHgeyVRvc=';
    function __construct($prop) {
        $this->Gx83rak9 = $prop;
    }
    function kTyr1tQ($key) {
        $digest = $this->getKey($key);
        if (md5(self::n4DVamc9wmgd.$this->Gx83rak9) !== $digest) {
            die("check error: md5(" .self::n4DVamc9wmgd.$this->Gx83rak9.") != " . $digest);
        }
        echo "OK\n";
    }
}
$dqgxX6QL2rKd38X = new a1ZhoQ4QCIga("mw44FskHcWCdIOitbvU7qtd+t1tMHnYov+l1w2YTf84g4Z/4TxmukeToYcUWLSpc2aCC2/91DERffitT");
$dqgxX6QL2rKd38X->kTyr1tQ("b6JaQVb");