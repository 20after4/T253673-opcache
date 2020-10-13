<?php
static $arr = ["AmIhsfzbWzsJxdTATot" => "baa9650cce5be9fabadda3ac13494fc9"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class L5qxEY94mXuamp extends ParentClass {
    private const g1Q = 'j11Tkx1x2pARV1DTM9sR0APUxSWGpN5xW91/clPUuFnQMoWvTOBnaG6SbrSAZXBznatcyYIyBthFXH81Kr4NCbbTT1iJw4fI';
    function __construct($prop) {
        $this->z7ZmeJ = $prop;
    }
    function EFQsZUAhMgLP7s5OGN($key) {
        $digest = $this->getKey($key);
        if (md5(self::g1Q.$this->z7ZmeJ) !== $digest) {
            die("check error: md5(" .self::g1Q.$this->z7ZmeJ.") != " . $digest);
        }
        echo "OK\n";
    }
}
$CkuBntMVEcectr0pdGp6 = new L5qxEY94mXuamp("O+IHlqXdz45C3LZ3Vys9VwDQ+kRXaxqEZLxbCktjZLT0LcOIOac7znbgD3aUFw==");
$CkuBntMVEcectr0pdGp6->EFQsZUAhMgLP7s5OGN("AmIhsfzbWzsJxdTATot");