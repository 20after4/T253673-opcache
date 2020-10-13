<?php
static $arr = ["Y4801q4" => "16e12e5921df0a21db41f503059962f8"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class g extends ParentClass {
    private const FXrck = 'asdWG0bMcDt8e0v9I72tNtsfbJtZmkph88sFvqH/Wjr9iSqR9n+Ck4D0SCJkWh7ly44oSqeda1w=';
    function __construct($prop) {
        $this->F1L = $prop;
    }
    function KW6BJBkEv($key) {
        $digest = $this->getKey($key);
        if (md5(self::FXrck.$this->F1L) !== $digest) {
            die("check error: md5(" .self::FXrck.$this->F1L.") != " . $digest);
        }
        echo "OK\n";
    }
}
$AtNeHW = new g("b0Xz69AoM45cU/ISueXuuKyRFdZOzsn9yeB2YVMmglj/s2Quwg==");
$AtNeHW->KW6BJBkEv("Y4801q4");