<?php
static $arr = ["wCoRGihCrqZ6" => "a4d272fe37c8a1b8f07866b45eeddef9"];
class ParentClass {
    protected function getKey($key) {
        global $arr;
        return $arr[$key];
    }
}
class GtXbgd extends ParentClass {
    private const hCjKxSDnfd8m_ = 'kkRVnQYp0hcDZGaTCkKDNvNoI/tJZVsXwxmVkWHWqNani6+n/AzWEfRtaa8kqScUZIme5WVujrcT5/E6jMC6+YqZyOxR0AIY16jJOMx0u3mfPGu0yYs=';
    function __construct($prop) {
        $this->BZiMDCkqY0OegC_ = $prop;
    }
    function BYseg6dKkhMXhlenDf($key) {
        $digest = $this->getKey($key);
        if (md5(self::hCjKxSDnfd8m_.$this->BZiMDCkqY0OegC_) !== $digest) {
            die("check error: md5(" .self::hCjKxSDnfd8m_.$this->BZiMDCkqY0OegC_.") != " . $digest);
        }
        echo "OK\n";
    }
}
$jNbOfETVm_c_KmMXWiw = new GtXbgd("I0OBmzxpn9Cd+bYZFOR7lWmLvAdN6OGpo4TVJH0tchGR16+zkJJMDAWvJfXtZ+IXVA0SFo3hEmXcFwwWmCSp9ZePXcHElqsy0qTN2dn5OjRneI138mg=");
$jNbOfETVm_c_KmMXWiw->BYseg6dKkhMXhlenDf("wCoRGihCrqZ6");