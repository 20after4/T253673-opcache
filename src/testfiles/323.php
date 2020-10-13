<?php
static $arr = ["f3Ri1x97" => "9e1f7b878205bb91ff063edd7c0ec10a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class sAELIoieg_5AQ9dH8x extends ParentClass {
    private const X = 'DqfFI675KNGbxaGxfUPAfTeKdU3O/6yIqKA/+ks95eN6/Yn4e/Uu71QjGCEjFaZQaHpUOW9LhFSD1mvnboRzhoq7o8ll1UkOaGMmvQgSryC2zKaxRZLr0s1iNXs5uQ==';
    function __construct($prop) {
        $this->rVvlpiyama1 = $prop;
    }
    function ExjsLGo($key) {
        $digest = $this->getKey($key);
        if (md5(self::X.$this->rVvlpiyama1) !== $digest) {
            die("check error: md5(" .self::X.$this->rVvlpiyama1.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Zh = new sAELIoieg_5AQ9dH8x("JO2idEnHLda8sxZ7Wg8CyF5mr7m3xdM9");
$Zh->ExjsLGo("f3Ri1x97");