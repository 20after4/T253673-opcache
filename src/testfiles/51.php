<?php
static $arr = ["HLgWl8FCGrAp9YXJ9" => "fc6c6ea09851f25c1ace29670b27c515"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class m0pV7sL extends ParentClass {
    private const tcnsTrD4lNzUJgHKptJP = 'hxf1Wgfi6fl/e5zwg+6zV20/nlUAzK2B84h3cASlBpNlXA8h';
    function __construct($prop) {
        $this->t8MaW = $prop;
    }
    function z($key) {
        $digest = $this->getKey($key);
        if (md5(self::tcnsTrD4lNzUJgHKptJP.$this->t8MaW) !== $digest) {
            die("check error: md5(" .self::tcnsTrD4lNzUJgHKptJP.$this->t8MaW.") != " . $digest);
        }
        echo "OK\n";
    }
}
$QY2JnAfi = new m0pV7sL("8CzBiHNG1jCTDslYP5G2cA599EqlssTdEdLaW7Gu6DsxT1FqIYNmyIOcEYfRuculXymDzUjIbV4Fdr8UdldgfRPbhTTZy1DA0mg+4d6mSKSj");
$QY2JnAfi->z("HLgWl8FCGrAp9YXJ9");