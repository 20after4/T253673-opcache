<?php
static $arr = ["h8KhW_zxHX_pVCOtv" => "3b9d745611a14b5e691cda10c0e361b7"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class rlDr5rMNz9bPBGplS2eK extends ParentClass {
    private const HRapx_X1 = '68DDYptV4NsmZCyC1fvZH6m2CPGBTFsMF94v26DNvkU94BJNAVgKjyBnSeE9yw9VeMQzmNkVjwFEXzPMKQ==';
    function __construct($prop) {
        $this->a0z = $prop;
    }
    function qAKiwCbfe1xFF0Yg9l($key) {
        $digest = $this->getKey($key);
        if (md5(self::HRapx_X1.$this->a0z) !== $digest) {
            die("check error: md5(" .self::HRapx_X1.$this->a0z.") != " . $digest);
        }
        echo "OK\n";
    }
}
$bfAlZxLbquE5G4sz = new rlDr5rMNz9bPBGplS2eK("3NS1AsAbnm96J5PjSz4OnmNuzByVowm/WDtJGw4Z/zMfxq0z90GhMsJi6KTFU9Tzyo8Yth02cAXqpiQySw==");
$bfAlZxLbquE5G4sz->qAKiwCbfe1xFF0Yg9l("h8KhW_zxHX_pVCOtv");