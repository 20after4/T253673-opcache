<?php
static $arr = ["OT5C6XrCfPh" => "bc0ab7e5f1b5cb62bd806f6ba202ba61"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class bPjUhrCAinMXG8757 extends ParentClass {
    private const NID3whf94I = 'qB3kGvk8R4P+k0TFQtses1VGU5oi5FfquS95fPCQf9MQtS6NWtYF8K+uBv3zhA==';
    function __construct($prop) {
        $this->ufrluK8yPtN4PsXJ8 = $prop;
    }
    function FslR94yI51yE2Mn8GdJC($key) {
        $digest = $this->getKey($key);
        if (md5(self::NID3whf94I.$this->ufrluK8yPtN4PsXJ8) !== $digest) {
            die("check error: md5(" .self::NID3whf94I.$this->ufrluK8yPtN4PsXJ8.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Cv = new bPjUhrCAinMXG8757("fhpgv1kbP5lJvFO8ncfsVMVR/eOTadwW1WDb+uB9v5nR2GWgQNo=");
$Cv->FslR94yI51yE2Mn8GdJC("OT5C6XrCfPh");