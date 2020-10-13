<?php
static $arr = ["Mau" => "826207b7bb4a3e8b410bd473afb478fe"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class fkhstTjq4 extends ParentClass {
    private const nXx = 'tO41EIoAoFbjNAXXBHdVE49YQQEp0BqXSPHJHpa4WqfLLMFkAduYqcAZ3EsZX5NIYFgMBFMHBnHdqKyQ4grGUuS0Ye812XKTkcwP';
    function __construct($prop) {
        $this->ZrScU8d5KFlYf3V = $prop;
    }
    function Vc3PBUQU($key) {
        $digest = $this->getKey($key);
        if (md5(self::nXx.$this->ZrScU8d5KFlYf3V) !== $digest) {
            die("check error: md5(" .self::nXx.$this->ZrScU8d5KFlYf3V.") != " . $digest);
        }
        echo "OK\n";
    }
}
$vMRbAk4f2s6N = new fkhstTjq4("iko7rgIAtye0x9pCQToMXZ3qTNtcfkbzTRfYllBBkurX9i/iy4Nb7lcyNl7qCDU=");
$vMRbAk4f2s6N->Vc3PBUQU("Mau");