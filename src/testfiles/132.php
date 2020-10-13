<?php
static $arr = ["Z" => "1ba879ce586dd612d1f82865f3109cbd"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class s14YxtqJw12Al70KifB extends ParentClass {
    private const VJNWA7G = 'Vwa5Em5q+CmLtWhFPCbWO84OyOOsRTcNpx9LvRAL6Onnp0pXXQnatXmVzW8sr51dkgxVy7VM4NH1iWDE0CLVrcP6r7fGfQ==';
    function __construct($prop) {
        $this->uFnh3G7GhWSvzR = $prop;
    }
    function UbyUhYkc6FV($key) {
        $digest = $this->getKey($key);
        if (md5(self::VJNWA7G.$this->uFnh3G7GhWSvzR) !== $digest) {
            die("check error: md5(" .self::VJNWA7G.$this->uFnh3G7GhWSvzR.") != " . $digest);
        }
        echo "OK\n";
    }
}
$oIFs0n = new s14YxtqJw12Al70KifB("89wJr8mL2mi/ZNO0EC59S14L+QgprdDlJCAQJcr1+iQ2RTc74bKhVPetWdguIfOn8RYjasg/MYD82hWVda7qze79PPI4WVDIDWHkcmivrbaDej7jr2ezAAo=");
$oIFs0n->UbyUhYkc6FV("Z");