<?php
static $arr = ["KH9BuvENu030f2qRqi" => "faba7434dd659f841b948d3a211048df"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class oLP extends ParentClass {
    private const GtPXaBDp = 'thtYpwPEBh1FXxsNoerj9cNFQ5T1wPdN2GB4Y9y6PbbyRP4etqaq1AZrvLUUMeSxl3vNjbOnWENuRKynO9YEB8iji38jo4nn95pZZNonrfMFSNmYqLP0UvQ/XwGfndBOFkI=';
    function __construct($prop) {
        $this->xlC4GuTW = $prop;
    }
    function g($key) {
        $digest = $this->getKey($key);
        if (md5(self::GtPXaBDp.$this->xlC4GuTW) !== $digest) {
            die("check error: md5(" .self::GtPXaBDp.$this->xlC4GuTW.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Jl3jdlgJ277qEvQztq = new oLP("v8n+PKfniCCU29K6w7+yiX/CY6XP5+tB9AvptcD9lwVAc3fj0417d/ADRA0YMHtxyXRJwUayIlHAqyKEk6DghBb/WpiU14MRRRuM");
$Jl3jdlgJ277qEvQztq->g("KH9BuvENu030f2qRqi");