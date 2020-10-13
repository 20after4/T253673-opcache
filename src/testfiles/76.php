<?php
static $arr = ["FtCb" => "b4ec7831f5a93e4673a38787504670be"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class f4ldeQe9Y76qn9qCZ extends ParentClass {
    private const UZf = 'AqcLj0p19rk4pWeuGGhb';
    function __construct($prop) {
        $this->LXGn69fBrF8WGOShqeq = $prop;
    }
    function uLPpzLvsVDzCz7LL($key) {
        $digest = $this->getKey($key);
        if (md5(self::UZf.$this->LXGn69fBrF8WGOShqeq) !== $digest) {
            die("check error: md5(" .self::UZf.$this->LXGn69fBrF8WGOShqeq.") != " . $digest);
        }
        echo "OK\n";
    }
}
$ur2ZI9 = new f4ldeQe9Y76qn9qCZ("ShoU09n/RbB/GIdWmAUfDXuSe/X65oHDimniW/cnJtrQEuhm7a8yEbMYjHdv/+n5pxdFKA9hoQFNV0JMKUF2ZTmgoT70UGY2G9h4V0gB0ag=");
$ur2ZI9->uLPpzLvsVDzCz7LL("FtCb");