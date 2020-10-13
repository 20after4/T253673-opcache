<?php
static $arr = ["FDIYVHdnGDTNp" => "05a518151148e13840c18aa75d55a8e5"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class TTdyDGoFZELWh7FJpeh extends ParentClass {
    private const hI8uhhZ1NyhN0svLycI = '5PLDf+Slalw8a9T1kjHveu7gZ/fLw8BXhmqjOsSar0zzYC2KXr+LM8NVZNI8vJ/LuPYPSlriC7UXP19DeYay/cta';
    function __construct($prop) {
        $this->BCwlgXi7YKnUx8L1TO = $prop;
    }
    function ApC($key) {
        $digest = $this->getKey($key);
        if (md5(self::hI8uhhZ1NyhN0svLycI.$this->BCwlgXi7YKnUx8L1TO) !== $digest) {
            die("check error: md5(" .self::hI8uhhZ1NyhN0svLycI.$this->BCwlgXi7YKnUx8L1TO.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ccrTy4Axjo4 = new TTdyDGoFZELWh7FJpeh("9cw2jGhrVh4QDoUMdQ40TYo6X0/tQpdfwdXcMtBGxhSdkBm2pTw05K1tynM+RumoCmXnszmcQ25T03grLgcDLFGC1172nIB/ka3mhZDuLzh01ZCnl5jZhxqvGYaGK3Y=");
$ccrTy4Axjo4->ApC("FDIYVHdnGDTNp");