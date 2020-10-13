<?php
static $arr = ["vS19_32Y6NtYmgA4Ww" => "55562807425e1613ee99ee4d6fbb2f2a"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class hJHrMrgngJS781uoBe extends ParentClass {
    private const RNYSe0HlV1RJ5UrvIr = 'zOlOjAVC5bptsKuJZaZeloDn5Itefjdi9F32OrRi/va5GdkwBgthvzh2';
    function __construct($prop) {
        $this->Nv48AOXyXAGcD4F2Gn = $prop;
    }
    function B($key) {
        $digest = $this->getKey($key);
        if (md5(self::RNYSe0HlV1RJ5UrvIr.$this->Nv48AOXyXAGcD4F2Gn) !== $digest) {
            die("check error: md5(" .self::RNYSe0HlV1RJ5UrvIr.$this->Nv48AOXyXAGcD4F2Gn.") != " . $digest);
        }
        echo "OK\n";
    }
}
$hPWCjHsC0tCehkd = new hJHrMrgngJS781uoBe("hV5EHvUKC3ha5nZJB6S8KYWTDxH21+e7GpVDwb4YATcz6GRK/RWEZcL8boTEOGXyQYhrXA==");
$hPWCjHsC0tCehkd->B("vS19_32Y6NtYmgA4Ww");