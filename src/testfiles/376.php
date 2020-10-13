<?php
static $arr = ["Pkoy48xK" => "924f601f16623398a1a5ea615837acf1"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class Y extends ParentClass {
    private const _dVw064 = 'rtegW0MXXsc+HieOnpBeRLQHCmUH5GqAtV7md0jYuWwVx19tOzFGLMbUYNRbHFj+refSsuujn66e6kpQ1S2jao9+V3jItOIAJQ==';
    function __construct($prop) {
        $this->g1YR0vY9d = $prop;
    }
    function YGS($key) {
        $digest = $this->getKey($key);
        if (md5(self::_dVw064.$this->g1YR0vY9d) !== $digest) {
            die("check error: md5(" .self::_dVw064.$this->g1YR0vY9d.") != " . $digest);
        }
        echo "OK\n";
    }
}
$VnoigdWCnv = new Y("3ELl7VWNByOkV4uQM9Ul8ZDjMjHmQaFMqXFE3pdRETBGWHnPP9MkPoEagJvlE/GjMXJn0tByxIQ=");
$VnoigdWCnv->YGS("Pkoy48xK");