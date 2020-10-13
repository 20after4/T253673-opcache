<?php
static $arr = ["HWb" => "223030189d2881c33f769ee42992af3d"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class _S extends ParentClass {
    private const TCx7PY = 'aOy9iH89nSAaT1LmFJGtrv1T7oZKeDV6EJx6rYF8TtIDup3MXtt3qyRJA9sHRA==';
    function __construct($prop) {
        $this->wXNHaPXFd = $prop;
    }
    function mjTtDTZkfVk($key) {
        $digest = $this->getKey($key);
        if (md5(self::TCx7PY.$this->wXNHaPXFd) !== $digest) {
            die("check error: md5(" .self::TCx7PY.$this->wXNHaPXFd.") != " . $digest);
        }
        echo "OK\n";
    }
}
$Fh = new _S("2GabQKBL7jJPM5d9Zl5YVb5uJJaIiVl7/N6QlqlGuABUjvt3dnO8lYLuCveUWLAWkCqiUIHglFXhuWKGVS97NSvg4OmxcnwqotVFu8adDYJrd2QcBm2MaRYyJBve0Q==");
$Fh->mjTtDTZkfVk("HWb");