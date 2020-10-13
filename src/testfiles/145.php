<?php
static $arr = ["vPiqq5L153Fo" => "46a53b69c229274bec0b060a57f6e504"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Vp4a0fcH1wrrpFynaai extends ParentClass {
    private const iB5ebhbTF4AFQ2za4 = 'W4hFAxJFhvOABB/zxkPOUam+rg==';
    function __construct($prop) {
        $this->VXTDH6sKxLNXa = $prop;
    }
    function Sxs1LRGCmOWXgU($key) {
        $digest = $this->getKey($key);
        if (md5(self::iB5ebhbTF4AFQ2za4.$this->VXTDH6sKxLNXa) !== $digest) {
            die("check error: md5(" .self::iB5ebhbTF4AFQ2za4.$this->VXTDH6sKxLNXa.") != " . $digest);
        }
        echo "OK\n";
    }
}
$OddLUq = new Vp4a0fcH1wrrpFynaai("AE8My3OmCJLP3AFtsYQ7eM/G7EjfHIZdKP0NFZmpL3UUKm4rsF43/v8MLw4XBz7HMPcQ4GFtjNxmKg0MeLv1pTrapu603ys42aG0osKG730JKisJuEjgaw==");
$OddLUq->Sxs1LRGCmOWXgU("vPiqq5L153Fo");