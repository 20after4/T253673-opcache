<?php
static $arr = ["PXW" => "ae0ab1821b7103fe8594d6864329a353"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class jaYpoQpm extends ParentClass {
    private const f58h8sLiMem7yY = 'wQbrcrxo/VlWaIgj40wNYqKvXMWX+c2DYrX4Xx0wlqPvEms9bQeIrsCghASbw+jEm5Wx';
    function __construct($prop) {
        $this->yTBdMRlyWbzfcTZt22x = $prop;
    }
    function mGdNi59iCuXIWl($key) {
        $digest = $this->getKey($key);
        if (md5(self::f58h8sLiMem7yY.$this->yTBdMRlyWbzfcTZt22x) !== $digest) {
            die("check error: md5(" .self::f58h8sLiMem7yY.$this->yTBdMRlyWbzfcTZt22x.") != " . $digest);
        }
        echo "OK\n";
    }
}
$EzIyQRv3MU9urYd = new jaYpoQpm("13vMZKYdejjiCUdqmeBEoS3b5lp5SGuYzD9Sym0Kl5fiSHYJleTtVVLu4mgKHOgS6iGllkW6WPogVB02I1gMe1CcYWyivz/qDLrYlXZM");
$EzIyQRv3MU9urYd->mGdNi59iCuXIWl("PXW");