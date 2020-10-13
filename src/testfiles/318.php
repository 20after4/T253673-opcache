<?php
static $arr = ["naCe0qRcqqKOdw5B" => "6bc5de4268dea899da10a52de7c2051f"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class QdthYGT3 extends ParentClass {
    private const bByHyI5h3bQFSywB = 'wdfRWhZaEVFK6SVqv7e5Zqn1nkfCLESbZRvMi9Dv2S/pc1Th5G4GxI/XNmQh9mHBHE4GziGbjVWIJW7BTxdeV8dheCsXEasEhZ67b80R3BhOPGztc3HhCh0=';
    function __construct($prop) {
        $this->dcMb2WzwgUHGAEkNC8Kv = $prop;
    }
    function HEfkJGLa($key) {
        $digest = $this->getKey($key);
        if (md5(self::bByHyI5h3bQFSywB.$this->dcMb2WzwgUHGAEkNC8Kv) !== $digest) {
            die("check error: md5(" .self::bByHyI5h3bQFSywB.$this->dcMb2WzwgUHGAEkNC8Kv.") != " . $digest);
        }
        echo "OK\n";
    }
}
$nrcu68xcdj = new QdthYGT3("S38mbxGU6h1NRitlMObKtyQhelnYE7w52czgvcVA2MdPBr9F9bT7wFbbyjhrXEXOqV8hbNu0EVS80y3Nsj3BoD3yZWw=");
$nrcu68xcdj->HEfkJGLa("naCe0qRcqqKOdw5B");